<!DOCTYPE HTML>
<html>  
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="styles.css" /> 
    <title>Gerar pdf</title>
</head>

<body>

<div class="jumbotron">
  <h1>PHP - Gerador de PDF para exames de audiometria</h1>
  <p>Gerador de PDF para exames de audiometria</p>
</div>
<div class="container">
<form action="generatePdf.php" method="post">
  <div class="form-group">
    <label>Nome</label>
    <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="nome">

    <label>Email </label>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="digete o email">

  </div>
  <button type="submit" class="btn btn-primary">Gerar PDF</button>

</form>

</div> <!-- container ->







<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

