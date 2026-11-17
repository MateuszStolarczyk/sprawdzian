<?php
    $dzien = date("w");
    if ($dzien == 0){
        echo "Dzisiaj jest: niedziela";
    } else if ($dzien == 1){
        echo "Dzisiaj jest: poniedziałek";
    } else if ($dzien == 2){
        echo "Dzisiaj jest: wtorek";
    } else if ($dzien == 3){
        echo "Dzisiaj jest: środa";
    } else if ($dzien == 4){
        echo "Dzisiaj jest: czwartek";
    } else if ($dzien == 5){
        echo "Dzisiaj jest: piątek";
    } else if ($dzien == 6){
        echo "Dzisiaj jest: sobota";
    }
?>


<?php
    $plik = fopen("wizytowka.txt", "w");
    fwrite($plik, "Anna Kowalska");
    fclose($plik);
?>

<?php
    $tablica= [];
    $losowa;
    for ($i=0; $i < 100; $i++) { 
        $losowa = rand(1, 100);
        $tablica[] = $losowa;
    }
    var_dump($tablica);
?>

<?php
session_start();
if(!isset($_SESSION)){
    $_SESSION["licznik"] = 1;
    echo $_SESSION["licznik"];
} else{
    $_SESSION["licznik"]++;
    echo $_SESSION["licznik"];
}
?>


<?php
    if(isset($_COOKIE["regulamin"])){
        setcookie("regulamin", 0, time() + 60*60);
        echo "dziękujemy za zaakceptowanie regualminu";
    } else{
        echo "zaakceptuj regulamin";
        setcookie("regulamin", 1, time() + 60*60);
    }
?>
<?php
$con = mysqli_connect("localhost", "root", "", "biblioteka");
$zapytanie = "SELECT tytul, id_autor from ksiazki";
$wynik = mysqli_query($con, $zapytanie);
echo "<table border='5px'> <tr> 
<tr><th>Tytuł</th><th>id autora</th></tr>
";
while ($wiersz = mysqli_fetch_array($wynik)){
    echo "<tr><td>$wiersz[0]</td> <td>$wiersz[1]</td></tr>";
}
echo "</table>";
?>