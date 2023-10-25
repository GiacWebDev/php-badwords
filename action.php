<?php
// Controllo se i parametri sono stati inviati tramite GET
// isset restituisce true ad una variabile settata
if (isset($_GET['paragraph']) && isset($_GET['BadWord'])) {
    $paragraph = $_GET['paragraph'];
    $BadWord = $_GET['BadWord'];

    // Gestisco la censura
    $censoredParagraph = str_replace($BadWord, '***', $paragraph);
    $paragraphLength = strlen($paragraph);

} else {
    echo "I parametri non sono stati forniti correttamente.";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Action</title>
</head>
<body>

  <h2>Paragrafo lungo <?php echo strlen($paragraph) ?> caratteri</h2>
  <h2>Ecco il paragrafo censurato <?php echo($censoredParagraph)?></h2>
  
</body>
</html>