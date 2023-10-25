<?php
// Controllo se i parametri sono stati inviati tramite GET
// isset restituisce true ad una variabile settata = se paragraph e BadWord sono stati mandati da GET allora creo variabili
if (isset($_POST['paragraph']) && isset($_POST['BadWord'])) {
    $paragraph = $_POST['paragraph'];
    $BadWord = $_POST['BadWord'];

    // Gestisco la censura
    $censoredParagraph = str_replace($BadWord, '***', $paragraph);
    $paragraphLength = strlen($paragraph);
    $censoredParagraphLenght = strlen($censoredParagraph);

} else {
    echo "I parametri non sono stati forniti correttamente";
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

  <p><strong>Il paragrafo: </strong> <?php echo($paragraph) ?> <br>
  <strong>è lungo </strong><?php echo strlen($paragraph) ?> caratteri</p>

  <p><strong>Il paragrafo censurato: </strong> <?php echo($censoredParagraph)?><br>
  <strong>è lungo </strong><?php echo($censoredParagraphLenght) ?></p>
  
</body>
</html>