<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telekocsi</title>
    <link rel="stylesheet" href="css/telekocsi.css">
</head>
<body>
    <div class="tartalom">
        <div>
            <header>
                <h1>Telekocsi</h1>
            </header>
                <div class="menu">
                    <ul>
                        <a href="../bemutatkozas">
                            <li>Bemutatkozás</li>
                        </a>
                        <a href="../soforoknek">
                            <li>Sofőröknek</li>
                        </a>
                        <a href="../utasoknak">
                            <li>Utasoknak</li>
                        </a>
                        <a href="../bejelentkezes">
                            <li>Bejelentkezés</li>
                        </a>
                        <a href="../registration">
                            <li>Regisztráció</li>
                        </a>
                    </ul>
                </div>
        </div>
        <div class="clear"></div>
        <div class="main">   
            <h2>Regisztráció</h2>
            <form action="index.php">
                <div class="inputs"><label>Név: </label><input type="text"></div>
                <div class="inputs"><label>E-mail cím: </label><input type="email"></div>
                <div class="inputs"><label>Jelszó: </label><input type="password"></div>
                <div class="inputs"><label>Jelszó ismét: </label><input type="password"></div>
                <input type="submit" value="Mentés">
            </form>
        </div> 
    </div>
</body>
</html>