<?php 
// Algemene variabelen
$pagina = "php, écht mooi";
$base = "//".$_SERVER['HTTP_HOST']."/"; // {BASISDIR}, soort van.

// Database gegevens
$db_hostname = 'localhost';
$db_database = 'test';
$db_userid   = 'root';
$db_password = 'root';

// Connectie met database maken
$mysqli = new mysqli($db_hostname, $db_userid, $db_password, $db_database);

// Gebruiker gegevens ophalen (In dit geval gebruiker #1, Marit)
$gebruikerQuery = $mysqli->query('SELECT id, naam FROM gebruikers WHERE id=1');
$gebruiker = $gebruikerQuery->fetch_assoc();
vv
// Stel er is hierboven voor Marit (gebruiker #1) gekozen
if($gebruiker['id'] == 1){
    $background = 'style="background-color: pink;"';
} elseif ($gebruiker['id'] == 3) {
    $background = 'style="background-color: black;"';
}

?>
<html>
    <head>
        <title><?php echo $pagina; ?></title>
        <link rel="stylesheet" href="<?php echo $base; ?>style.css">
    </head>
    <body <?php echo $background; ?>>
        <?php
        echo '<h1 class="titel">Hallo, '.$gebruiker['naam'].' <span>(#'.$gebruiker['id']. ')</span></h1>';
        ?>
    </body>
</html>