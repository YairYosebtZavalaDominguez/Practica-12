<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practica 12-Formularios</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body  class="bodypagina">
<header>
     
           <div>

<center> <img  src="img/Logo.jpg" width="100px"  height="100px" alt="" id="logo"></center>
 <center> <h1>Formulario</h1> </center> 
 </header>
 </div>
 
 <hr>
 <br>

    <div class="areaPrincipal">

    <form name="formulario" method="post" action="procesar.php">
    Nombre: <input type="text" name="nombre" value="">
    Apellidos: <input type="text" name="apellidos" value="">
    <input type="submit" value="Enviar" />

     </form>
    
<br>
<br>

   <form name="Area" method="post"  action="area.php">
    Radio del Circulo: <input type=text name="radio" value="">
   <input type="submit" value="Calcular" />
</form>

</div>


</body>
</html>