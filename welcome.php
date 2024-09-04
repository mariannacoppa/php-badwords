<?php 
    $nome = $_GET['nome'];
    $cognome = $_GET['cognome'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Welcome <?php // echo $nome." ".$cognome; ?> in php world -->
    Welcome <?php echo $nome." ".str_replace('cognome', '***', 'cognome'); ?> in php world <br>
</body>
</html>