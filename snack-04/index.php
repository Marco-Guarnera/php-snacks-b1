<?php

// Fase di preparazione

// Variabili

// Struttura dati

include_once __DIR__ . '/data-structure.php';

// Fase di raccolta dati
// Fase di elaborazione

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Marco Guarnera">
    <meta name="description" content="Snack 04">
    <!-- Title -->
    <title>Snack 04</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- Main Header -->
    <header id="main-header">
        <h1 class="text-center">Snack 04</h1>
    </header>
    <!-- Main -->
    <main>
        <?php foreach ($classi as $key => $value) { ?>
            <h2><?= $key ?></h2>
            <?php foreach ($value as $item) { ?>
                <?php if ($item['voto_medio'] >= 6) { ?>
                    <ul>
                        <li><?= $item['id'] ?></li>
                        <li><?= $item['nome'] ?></li>
                        <li><?= $item['cognome'] ?></li>
                        <li><?= $item['anni'] ?></li>
                        <li><?= $item['voto_medio'] ?></li>
                        <li><?= $item['linguaggio_preferito'] ?></li>
                        <li><?= $item['immagine'] ?></li>
                    </ul>
                <?php } ?>
            <?php } ?>
        <?php } ?>
    </main>
</body>

</html>

<?php

// Fase di produzione

var_dump($classi);

?>