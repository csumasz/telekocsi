<?php
    $datas = [
        ['Indulás', 'Cél', 'Rendszám', 'Telefonszám', 'Férőhely'],
        ['Veszprém', 'Budapest', 'NB-95-38', 438866905, '4'],
        ['Szekszárd', 'Győr', 'XY-84-28', 312734682, '6'],
        ['Budapest', 'Miskolc', 'AM-75-44', 648097594, '4'],
        ['Kaposvár', 'Kecskemét', 'YL-50-15', 559731734, '4'],
        ['Győr', 'Budapest', 'IZ-64-34', 616492230, '6'],
    ];
     
    //Creates a new file employee_records.csv
    $file = fopen('../resources/csv/autok.csv', 'w'); //w is the flag for write mode.
     
    if($file === false)
    {
        die('Cannot open the file');
    }
     
    foreach($datas as $data)
    {
        //Formats the employee record as CSV and writes it out employee_records.csv
        fputcsv($file, $data,  ";");
    }
     
    //Closes the file.
    fclose($file);

    $igenyek = [
        ['Azonosító', 'Indulás', 'Cél', 'Személyek'],
        ['F82953', 'Debrecen', 'Szeged', '4'],
        ['C44366', 'Debrecen', 'Budapest','2'],
        ['C63068', 'Szekszárd', 'Budapest', '1'],
        ['Y47760', 'Székesfehérvár', 'Debrecen', '1'],
        ['M64723', 'Zalaegerszeg', 'Budapest', '2'],
    ];
     
    //Creates a new file employee_records.csv
    $file = fopen('../resources/csv/igenyek.csv', 'w'); //w is the flag for write mode.
     
    if($file === false)
    {
        die('Cannot open the file');
    }
     
    foreach($igenyek as $igeny)
    {
        //Formats the employee record as CSV and writes it out employee_records.csv
        fputcsv($file, $igeny, ";");
    }
     
    //Closes the file.
    fclose($file);
?>