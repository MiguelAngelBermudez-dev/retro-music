<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--JS-->
  <script type="text/javascript" src="js/main.js"></script>
  <!--CSS-->
  <link rel="stylesheet" href="./css/styleAdmin.css">
  <!--BOOSTRAP-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/20c3068fbf.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <title>Admin</title>
  <style>

  </style>



</head>

<body>

  <div class="parentAdmin">
    <div class="headAdmin">
      <?php
      // Recuperar el valor de la variable admin de la URL
      $adminCodificado = isset($_GET['admin_encoded']) ? urldecode($_GET['admin_encoded']) : '';
      echo "<div class=\"titulo\"><h1 id=\"titulo-Admin\">Bienvenido  $adminCodificado</h1></div>"
      ?>
      <div id="salir">
        <a href="index.php"><span class="material-symbols-outlined">
            logout
          </span> </a>
      </div>

    </div>
    <div class="bodyAdmin">


      <form class="form" action="" method="POST">
        <p class="title">Registra el articulo </p>
        <p class="message">Añada todos los articulos a la base de datos. </p>
        <div class="flex">
          <label>
            <input class="input" type="text" name="nombre" id="nombre" placeholder="" required="">
            <span>Nombre DVD</span>
          </label>

          <label>
            <input class="input" type="text" name="artista" id="artista" placeholder="" required="">
            <span>Nombre artista</span>
          </label>
        </div>

        <label>
          <input class="input" type="text" name="estilo" id="estilo" placeholder="" required="">
          <span>Estilo musical</span>
        </label>

        <label>
          <input class="input" type="text" name="año" id="año" placeholder="" required="">
          <span>Año de lanzamiento</span>
        </label>
        <label>
          <input class="input" type="number" name="canciones" id="canciones" placeholder="" required="">
          <span>Numero de canciones</span>
        </label>
        <label>
          <input class="input" type="text" name="titulo" id="titulo" placeholder="" required="">
          <span>Titulo de canciones</span>
        </label>
        <label>
          <input class="input" type="number" name="cantidad" id="cantidad" placeholder="" required="">
          <span>Cantidad DVD</span>
        </label>
        <label>
          <input class="input" type="number" name="precio" id="precio" placeholder="" required="">
          <span>Precio DVD</span>
        </label>
        <label>
          <input class="input" type="number" name="descuento" id="descuento" placeholder="" required="">
          <span>Descuento DVD</span>
        </label>
        <label>
          <input class="input" type="number" name="IVA" id="IVA" placeholder="" required="">
          <span>IVA DVD</span>
        </label>
        <button type="button" onclick="insertar()" class="submit">Enviar</button>
        <button type="reset" class="reset">Borrar</button>
      </form>
      <div class="botones">
        <a href="#" onclick="mostrar()" class="mostrar btn">Mostrar articulos</a>
        <a href="#" onclick="consultName()" class="mostrar btn">consultar por nombre</a>
        <a href="#" onclick=" Ordenado()" class="mostrar btn">Mostrar por orden de insersion</a>
        <a href="#" onclick=" orderConsult()" class="mostrar btn">Elegir orden</a>
        <a href="#" onclick="ordenLimit()" class="mostrar btn">Articulos valor superior a 25€</a>
<br/>
<a href="#" onclick="masVendidos()" class="mostrar btn">Mostrar ventas</a>
<a href="#" onclick="datosCliente()" class="mostrar btn">Mostrar cliente</a>
<a href="#" onclick="precioTotalVentas()" class="mostrar btn">Mostrar precio total de articulos vendidos</a>
<a href="#" onclick="productoxCliente()" class="mostrar btn">Mostrar producto del cliente a elegir</a>
<a href="#" onclick=" mayorVenta()" class="mostrar btn">Mostrar producto mas vendido</a>
      </div>
      <?php include("formInsertar.php") ?>
        <?php include("formBorrar.php") ?>
        <?php include("formConsulta.php") ?>
        <?php include("formOrder.php")?>
        <?php include("formOrdeConsult.php")?>
        <?php include("formOrdeLimit.php")?>
        <?php include("formMas.php")?>
        <?php include("formCliente.php")?>
        <?php include("formTotal.php")?>
        <?php include("formProductoCliente.php")?>
        <?php include("formMayorVnedido.php")?>
        <?php include("formHiddenMostrar.php") ?>

    </div>

  </div>


</body>

</html>