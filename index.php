<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>php-badwords</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="./welcome.php" method="GET">
                    <div class="row">
                        <div class="offset-2 col-4">
                            <div class="form-group">
                                <div class="control label">Inserisci il nome</div>
                                <input type="text" class="form-control" name="nome" placeholder="Nome">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <div class="control-label">Cognome</div>
                                <input type="text" class="form-control" name="cognome" placeholder="Cognome">
                            </div>
                        </div>
                        <div class="col-10 offset-2 mt-3">
                            <button class="btn btn-sm btn-primary">Invia i tuoi dati</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php 
    $nome = 'Marianna'; 
    echo "<h1>$nome</h1>"; 
?>