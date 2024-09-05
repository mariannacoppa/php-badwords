<?php 
    // recupero i valori inseriti nel form
    $paragraph = $_GET['paragraph'];
    $word = $_GET['word'];

    // sostituisco la parola da censurare con 3 asterischi
    $censored_paragraph = str_replace($word, '***', $paragraph);
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
                    <h4>Paragrafo non censurato: <?php echo $paragraph; ?></h4>
                    <!-- censuro la seconda parola inserita nel form -->
                    <h4>Paragrafo censurato: <?php echo $censored_paragraph; ?> </h4>
                    <!-- stampo la lunghezza dei caratteri totali inseriti nel form -->
                    <p>Lunghezza senza censura: <?php echo strlen($paragraph); ?> caratteri</p>
                    <!-- Somma dei termini con il termine censurato -->
                    <p>Lunghezza con censura: <?php echo strlen($censored_paragraph); ?> caratteri</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>