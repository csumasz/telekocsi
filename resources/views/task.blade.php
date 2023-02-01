<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0 auto;
                width: 80%;
            }

        </style>
    </head>
    <body>
        <div>
            1. feladat – Programozás Összesen: 60 pont
A feladat során egy telekocsi szolgáltatást végző cég hirdetőinek és utasainak párosítását 
kell elvégeznie. A hirdetők egy adott útvonalon (induló- és célállomás) vállalják, hogy az 
autójukban a szabad férőhely erejéig utasokat visznek el.
A feladat megoldása során két UTF-8 kódolású fájllal kell dolgoznia: autok.csv és 
igenyek.csv. Mindkét fájl első sora fejléc adatokat tartalmaz.
Az autok.csv fájl minden sora egy-egy hirdető adatát tartalmazza pontosvesszővel 
elválasztva. 
Az adatok egymás után: indulóváros, célváros. Ezeket követi a rendszám és a sofőr 
telefonszáma. A sorban az utolsó adat a férőhelyek száma.
Az igenyek.csv fájl minden sora egy-egy felhasználói igényt tartalmaz. Az adatok 
egymás után – ahogy a fejlécben is látszik – az igénylő azonosítója, az induló- és 
célállomás, valamint az utasok száma:
A megoldás során vegye figyelembe a következőket:
• Az ékezetmentes kiírás is elfogadott.
• A feladat jobb megértése érdekében tanulmányozza a mintákat is!
Készítsen konzolos vagy grafikus programot Telekocsi néven, amely az alábbi 
feladatokat oldja meg!
1. Olvassa be és tárolja el az autok.csv fájl tartalmát!
2. Írja ki, hogy hány hirdető adatát tartalmazta az első feladatban beolvasott fájl!
3. Határozza meg és írja ki a képernyőre, hogy Budapestről Miskolcra összesen hány 
férőhelyet hirdettek a sofőrök!
T 54 213 05/1/4
T 3/5
4. Határozza meg és írja ki, hogy melyik volt az az útvonal (induló- és célállomás),
amelyhez a legtöbb férőhelyet ajánlották fel a hirdetők!
5. Az igenyek.csv fájl beérkezési sorrendben tartalmazza az utazási igényeket. Az 
igények feldolgozása beérkezési sorrendben történik. Olvassa be az igényeket és a 
beérkezési sorrendnek megfelelően határozza meg, hogy melyek azok az igények, 
amelyekhez lehet hirdetést (sofőrt) találni! A találatokat a mintának megfelelően írja 
ki a képernyőre!
6. Készítse el a minta szerint az utasuzenetek.txt fájlt, amely tartalmazza az 
egyes igényekre adott választ! Az igénylő sikeres párosítás esetén megkapja az autó 
rendszámát és a sofőr telefonszámát, sikertelen párosítás esetén egy „Sajnos nem 
sikerült autót találni” üzenetet kap. 
Minta
2. feladat
40 autós hirdet fuvart
3. feladat
Összesen 6 férőhelyet hirdettek az autósok Budapestről Miskolcra
4. feladat
A legtöbb férőhelyet (11-et) a Zalaegerszeg-Budapest útvonalon
ajánlották fel a hirdetők
5. feladat
C63068 => NC-33-62
M64723 => BQ-14-99
C98061 => JE-85-18
P32525 => RJ-85-77
D58331 => NB-95-38
X19002 => HU-71-66
I69766 => NC-33-62
D71622 => JE-85-18
S14000 => UP-28-24
M20265 => JH-73-38
W33230 => JH-73-38
R50454 => JC-26-34
Q83947 => MG-21-65
V18604 => FN-26-44
I90207 => BQ-14-99
Minta a 6. feladathoz (utasuzenetek.txt)
2. feladat – Weblapkészítés Összesen: 40 pont
T 54 213 05/1/4
T 4/5
A következő feladatban egy telekocsi szolgáltatást népszerűsítő weboldalt kell készítenie 
a minta szerint. A feladat megoldása során a következő állományokat kell felhasználnia:
telekocsi.css, auto.png, tartalom.txt. A formázási beállításokat minden 
esetben a telekocsi.css stílusállományban végezze el!
1. Hozzon létre HTML oldalt telekocsi.html néven! Állítsa be az oldal nyelvét 
magyarra és a kódolását UTF-8-ra! 
2. A böngésző címsorában megjelenő cím „Telekocsi” legyen!
3. A weboldal fejrészében helyezzen el hivatkozást a telekocsi.css stíluslapra!
4. Hozzon létre egy keretet (DIV-et) és formázza meg a tartalom stílusosztály 
segítségével! Minden további weboldalelemet ebben a div-ben helyezzen el!
5. Alakítsa ki a weboldal fejrészét!
 Egyes szintű címsor segítségével írja ki azt oldal címét: Telekocsi!
 Hozzon létre egy keretet (DIV-et) és formázza meg a menu stílusosztály 
használatával!
 Az előző pontban létrehozott keretbe készítsen felsorolást a menüpontoknak: 
Bemutatkozás, Sofőröknek, Utasoknak, Bejelentkezés, 
Regisztráció!
6. Az előző öt pont segítségével létrehozott fájlt mentse el, és készítsen belőle másolatot 
regisztracio.html néven!
7. Alakítsa ki a telekocsi.html oldal tartalmát a mintának megfelelően!
 A Bemutatkozás szöveg legyen 2-es szintű címsor!
 Az auto.png képet formázza meg az auto azonosító kijelölő segítségével!
 Alakítsa ki a bekezdéseket! A bekezdés szövegének a tartalmát a 
tartalom.txt állományban találja.
 A kiemelt szöveget („Az úton lévő autók számának csökkenésével…” kezdetű 
mondat) formázza meg a kiemelt stílusosztály segítségével!
 A forrásmegjelölést tartalmazó (utolsó) bekezdést formázza meg a forras
stílosztály segítségével!
8. A telekocsi.html oldallal kapcsolatban a telekocsi.css állományban 
végezze el az alábbi formázási beállításokat!
 A tartalom stílusosztállyal ellátott keretnek legyen 2 képpontos szürke kerete 
és 10 képpontos belső margója (bélése)!
 Az egyes szintű címsor legyen középre igazítva és aláhúzva, valamint a betűk 
mérete legyen 30 pontos! Az címsor alatt legyen 20 képpontos margó!
 A bekezdések legyenek sorkizártak!
 A kép szélessége legyen 250 képpont!
 A kiemelt szöveg legyen félkövér!
9. Alakítsa ki a regisztacio.html oldal tartalmát a mintának megfelelően!
 A Regisztráció szöveg legyen 2-es szintű címsor!
 Hozzon létre űrlapot a beviteli mezőknek és a címkéknek!
 Alakítsa ki a regisztrációs űrlapot a mintának megfelelően! Ügyeljen arra, 
hogy a megfelelő beviteli mezőtípust válassza!
T 54 213 05/1/4
T 5/5
 Készítsen Javascript kódot, amely a mentés gomb megnyomására ellenőrzi, 
hogy a jelszó ki van-e töltve, illetve, hogy a két megadott jelszó egyforma-e! 
Ha hibát talál, akkor azt egy felugró ablakban (alert) jelezze a felhasználónak!
10. Mindkét html fájlban készítsen hivatkozást a megfelelő menüpontra, amelynek 
segítségével az egyik oldalról át lehet navigálni a másik oldalra!
        </div>
    </body>
</html>
