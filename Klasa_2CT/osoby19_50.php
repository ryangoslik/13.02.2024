<?php   include_once("connect.php"); ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Klasa 2CT - 13.02.2024 ćwiczenia</title>
</head>
<body>
<h2>Autor: ja</h2>  
    <hr>
    <div class="counter">
    <?php 
     $counter_records = $conn->query("SELECT COUNT(ksi____ka.ID) as 'ile' from ksi____ka where WIEK between 19 and 50;");
     list($ile)=mysqli_fetch_row($counter_records);
     echo"<h4>Couter: $ile rekordów</h4>";
   ?>
</div>  
    <nav>
         <ul>
         <li><a href="index.php"> HOME</a>
         <li><a href="all.php"> Wszytskie rekordy z bazy</a>
        <li><a href="osoby10_18.php"> osoby od 10 do 18</a>
        <li><a href="osoby19_50.php"> osoby od 19 do 50</a>
         </ul>


    </nav>
<div class="osoby19_50"><ul>
<?php  
$all_records = $conn->query("SELECT ksi____ka.ID,ksi____ka.IMIE,ksi____ka.NAZWISKO,ksi____ka.WIEK from ksi____ka where WIEK between 19 and 50;");
while(list($ID,$IMIE,$NAZWISKO,$WIEK)=mysqli_fetch_row($all_records)){
    echo("<li><b>$ID</b>,<i>$IMIE,$NAZWISKO,$WIEK</i></li>");
}
?>


</ul></div>








</body>
</html>
<?php   $conn->close();       ?>