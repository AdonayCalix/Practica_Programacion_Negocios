<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <title>Practica</title>
</head>
<body>
<form action="#" method="post" id="formulario">
    <label>Nombre</label>
    <input type="text" name="nombre"><br>
    <label for="">Apellido</label>
    <input type="text" name="apellido"><br>
    <label for="">Numero de Identidad</label>
    <input type="text" name="identidad"><br>
    <label for="">Sexo</label><br>
    <input type="radio" name="masculino">&nbsp;Masculino<br>
    <input type="radio" name="femenino">&nbsp;Femenino<br>
    <label for="">Hijos</label><br>
    <input type="radio" name="si">&nbsp;Si<br>
    <input type="radio" name="no">&nbsp;No<br>
    <label for="">Telefono</label>
    <input type="text" name="telefono"><br>
    <label for="">Departamento</label>
    <select name="departamento" id="departamento">
        <option value="0">Seleccione</option>
    </select><br>
    <label for="">Municipio</label>
    <select name="municipio" id="municipio">
        <option value="0">Seleccione</option>
    </select><br>
    <input type="reset" value="Limpiar">&nbsp;
    <input type="submit" id="enviar" value="Enviar">
</form>
</body>
</html>