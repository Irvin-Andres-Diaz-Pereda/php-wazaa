<?php
  include("./cn.php");
  $alumnos = "SELECT * FROM  alumnos";
?>

<!DOCTYPE html>
<html lang="es">
  <head>
  <meta charset="UTF-8">
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0,maximum-scale=1.0,
  minium-scale=1.0">
  <link rel="stylesheet" href="./diseño.css">

</head>
      <body>
      <div class="container-add">
        <h2 class="container__title">Registrar alumno</h2>
        <form action="insertar.php" method="post" class="container__form">
          <div class="container__form">
            
          <label for="nombre" class="container__label">Nombre</label>
          <input name="nombre"  type="text">

          <label for="apellido" class="container__label">Apellido</label>
          <input name = "apellido" type="text">

          <label for="telefono" class="container__label">Numero de Telefono</label>
          <input name = "telefono" type="number">
          
          <label for="vivienda" class="container__label">Lugar de vivienda</label>
          <input name = "vivienda" type="text" >

          <label for="nunControl" class="container__label">Numero de control</label>
          <input name="numControl" type="number">
        

          <button class="btn btn-success" type="submit">enviar</button>
        </div>
       </form>
       </div> 
       
  <div class="container-table">
          

  <div class="table__title"> Registro de alumnos</div>



  <div class="table__header"> Nombre</div>

  <div class="table__header"> Apellido</div>

  <div class="table__header">Numero de Telefono</div>

  <div class="table__header"> Lugar de vivienda</div>

  <div class="table__header"> Numero de control </div>

  <?php $resultado = mysqli_query ($conexion,$alumnos);
        
        while($row=mysqli_fetch_assoc($resultado)){?> 




  <div class="table__item"><?php echo $row["nombre"]; ?></div>

  <div class="table__item"><?php echo $row["apellido"];?> </div>

  <div class="table__item"><?php echo $row["telefono"];?>  </div>

  <div class="table__item"><?php echo $row["vivienda"];?> </div>

  <div class="table__item"> <?php echo $row["numControl"];?> </div>
  <?php } ?>


      
      
     
 </div>
 </body>

</html>