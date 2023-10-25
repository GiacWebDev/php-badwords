<?php 
$testo = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum, cum.'
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


  <title>PHP Badwords</title>
</head>
<body>
  
<form>
  <div class="container mt-5">
    <div class="row">
      <div class="col">

        <div class="mb-3">
          <label for="testo" class="form-label">Testo</label>
          <input type="text" class="form-control" id="testo" name="testo">
          <div id="textHelp" class="form-text">Inserisci il testo</div>
        </div>

        <div class="mb-3">
          <label for="badword" class="form-label">Inserisci la BadWord</label>
          <input type="text" class="form-control" id="badword" names="badword>
        </div>

        <button type="submit" class="btn btn-primary">Invia</button>
      </form>
        
      </div>
    </div>
  </div>
</body>
</html>