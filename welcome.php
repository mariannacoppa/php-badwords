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
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content">
                    <!-- stampo i nomi inseriti nel form -->
                    <h1>Welcome <?php echo $nome." ".$cognome; ?> in php world</h1>
                    <!-- censuro la seconda parola inserita nel form -->
                    <p>Welcome <?php echo $nome." ".str_replace('cognome', '***', 'cognome'); ?> in php world</p>
                    <!-- stampo la lunghezza dei caratteri totali inseriti nel form -->
                    <p>Somma di nome e cognome: <?php echo strlen($nome.$cognome); ?> caratteri</p>
                    <!-- Somma dei termini con il termine censurato -->
                     <p>Somma di nome e cognome censurato: <?php echo strlen($nome.'***'); ?> </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>