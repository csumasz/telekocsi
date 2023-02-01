<?php
//Task 1
//Olvassa be és tárolja el az autok.csv fájl tartalmát!

$carsFile = fopen('../resources/csv/autok.csv', 'r');
$cars = array();
while(($line = fgetcsv($carsFile, 1000, ";"))!==false){
    array_push($cars, $line);
};
fclose($carsFile);
array_shift($cars);//remove header
echo '<pre>';
//print_r($cars);

//Task 2
//Írja ki, hogy hány hirdető adatát tartalmazta az első feladatban beolvasott fájl

echo '2. feladat<br>';
echo count($cars).' autós hirdet fuvart.';
echo '<br>';

//Task3
//Határozza meg és írja ki a képernyőre, hogy Budapestről Miskolcra összesen hány 
//férőhelyet hirdettek a sofőrök

$result = array();
foreach($cars as $car){
        if($car[0] == 'Budapest' && $car[1] == 'Miskolc'){
            array_push($result, $car);
      }
    
}
//echo 'Összesen '.$result.' férőhelyet hirdettek az autósok Budapestről Miskolcra';
//print_r($result);

$amount = 0;
foreach($result as $item){
    $amount += $item[4];
}
echo '3. feladat<br>';
echo 'Összesen '.$amount.' férőhelyet hirdettek az autósok Budapestről Miskolcra
';

//Task 4
//Határozza meg és írja ki, hogy melyik volt az az útvonal (induló- és célállomás),amelyhez a legtöbb férőhelyet ajánlották fel a hirdetők!

$carRoutes = array ();
$i=0;
foreach($cars as $car){
    if(empty($carRoutes)){
        $carRoutes[$i] = $car;
    }
    else{
        $helper = false;
        $j=0;
        foreach($carRoutes as $routes){
            if($car[0] == $routes[0] && $car[1] == $routes[1] && $car[2] == $routes[2]){
                $helper = true;
                $carRoutes[$j][4]+=$cars[$i][4];
                break;
            }
            $j+=1;
        }
        if($helper == false){
            $carRoutes[$i] = $car;
        }
    }
    $i += 1;
}
    
$maxSeat = array();
foreach($carRoutes as $routes){
    if(empty($maxSeat)){
        $maxSeat = $routes;
    }
    else{
        if($routes[4]>$maxSeat[4]){
            $maxSeat = $routes;
        }
    }
}
echo '4. feladat<br>';
echo 'A legtöbb férőhelyet ('.$maxSeat[4].'-et) a '.$maxSeat[0].'-'.$maxSeat[1].' útvonalon
ajánlották fel a hirdetők<br>';


//Task 5
/*Az igenyek.csv fájl beérkezési sorrendben tartalmazza az utazási igényeket. Az 
igények feldolgozása beérkezési sorrendben történik. Olvassa be az igényeket és a 
beérkezési sorrendnek megfelelően határozza meg, hogy melyek azok az igények, 
amelyekhez lehet hirdetést (sofőrt) találni! A találatokat a mintának megfelelően írja 
ki a képernyőre!*/

//read datas from file and save datas in an array 
$needsFile = fopen('../resources/csv/igenyek.csv', 'r');
$needs = array();
while(($line = fgetcsv($needsFile, 1000, ";"))!==false){
    array_push($needs, $line);
};
fclose($needsFile);
array_shift($needs);//remove header
//print_r($needs);
//print_r($carRoutes);

$fulfilled = array();
$waiting = array();
$identifier = '';
$licenseNumber = '';
$outWritingData = array();
$outWriting = array();
$i = 0;
foreach($needs as $need){
    $helper2 = false;
    
    foreach($carRoutes as $routes){
        if($need[1] == $routes[0] && $need[2] == $routes[1] && $need[3]<=$routes[4]){
            $helper2 = true;
            //$carRoutes[$i][4] -= $need[3];
            if(empty($outWriting)){
                array_push($fulfilled, $need);
                $identifier = $need[0];
                $licenseNumber = $routes[2];
                array_push($outWritingData, $identifier);
                array_push($outWritingData, $licenseNumber);
                $outWriting[$i] = $outWritingData;
                $outWritingData = array();
                
                
            }
           foreach($outWriting as $outData){
                if($need[0] == $outData[0]){
                    break;
                }
                else{
                    array_push($fulfilled, $need);
                    $identifier = $need[0];
                    $licenseNumber = $routes[2];
                    array_push($outWritingData, $identifier);
                    array_push($outWritingData, $licenseNumber);
                    $outWriting[$i] = $outWritingData;
                    $outWritingData = array();
                    break;
                }
            }
           
        }
        
    }
    if($helper2 == false){
        array_push($waiting, $need);
    }
    $i++;
}

//print_r($outWriting);
//print_r($fulfilled);
//print_r($waiting);
//print_r($cars);
echo '<br>';
echo '5. feladat<br>';
foreach($outWriting as $writing){
    echo $writing[0].' => '.$writing[1].'<br>';
}

//Task 6
/*Készítse el a minta szerint az utasuzenetek.txt fájlt, amely tartalmazza az 
egyes igényekre adott választ! Az igénylő sikeres párosítás esetén megkapja az autó 
rendszámát és a sofőr telefonszámát, sikertelen párosítás esetén egy „Sajnos nem 
sikerült autót találni” üzenetet kap.*/

$messageFile = fopen('../resources/txt/utasuzenetek.txt', 'w');
//print_r($needs);
foreach($needs as $need){
    foreach($outWriting as $writing){
        if($need[0] !== $writing[0]){
            $line = $need[0].': Sajnos nem sikerült autót találni';
        }    
    }
   foreach($outWriting as $writing){
        if($need[0] == $writing[0]){
            foreach($cars as $car){
                if($car[2] == $writing[1]){
                    $phoneNumber = $car[3];
                    $line = $need[0].': Rendszám: '.$writing[1].', Telefonszám: '.$phoneNumber;
                }
            }
            break;  
        }
    }
    fwrite($messageFile, $line.PHP_EOL);//php_eol end of line 
}

fclose($messageFile);


?>