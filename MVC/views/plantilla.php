<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">

    <header>
      <h1 class="display-4 text-center">Bienvenido a Futbol_Camp</h1>
    </header>
      <?php
      include "modules/navegacion.php";
      ?>
     <section>
       <?php
        $mvc= new Controller();
        $mvc->enlacesPaginasController();

       ?>
     </section>
</div>

 <script src="views/js/validarRegistro.js"></script>

</body>
</html>