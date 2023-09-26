<?php
    // Inizializza le variabili
    $paragrafo = '';
    $paragrafoCensurato = '';

    // Controlla se è stato inviato un paragrafo tramite POST
    if (isset($_POST['paragrafo'])) {
        // Ottieni il paragrafo e la parola da censurare
        $paragrafo = $_POST['paragrafo'];
        $parolaDaCensurare = isset($_POST['parola']) ? $_POST['parola'] : '';

        // Sostituisci la parola da censurare con tre asterischi
        $paragrafoCensurato = str_replace($parolaDaCensurare, '***', $paragrafo);

        // Verifica se il paragrafo è vuoto
        if (empty($paragrafo)) {
            echo 'Assicurati di aver inserito il paragrafo.';
        }
    } else {
        echo 'Il form non è stato inviato correttamente.';
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Elaborazione Paragrafo</title>
</head>
<body>
    <?php if (!empty($paragrafo) && !empty($paragrafoCensurato)) { ?>
        <!-- Visualizza il risultato solo se il form è stato inviato e ci sono dati -->
        <h2>Risultato:</h2>

        <!-- Visualizza il paragrafo -->
        <strong>Paragrafo:</strong><br>
        <?php echo $paragrafo; ?><br><br>

        <!-- Visualizza il paragrafo censurato -->
        <strong>Paragrafo Censurato:</strong><br>
        <?php echo $paragrafoCensurato; ?><br><br>

        <!-- Visualizza la lunghezza del paragrafo -->
        Lunghezza del paragrafo: <?php echo strlen($paragrafo); ?> caratteri
    <?php } ?>
</body>
</html>
