

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=StyleSheet href="./css/estilo.css" TYPE="text/css" >
    <title>login</title>
</head>
<body>
    <div class="portada-img" ></div>
    <form action="validar()">        
        <span> Ingrese sus datos </span>
        <div class="input-val">
            <label class ="label-input"> Usuario</label>
            <input type="text" id="name" class="input-box" placeholder="Ingrese su Usuario">
            <span class="focus-input"></span>
        </div>
        <div class="input-val">
            <label class ="label-input"> contraseña</label>
            <input type="text" id="name" class="input-box" placeholder="Ingrese su constraseña">
            <span class="focus-input"></span>
        </div>
        <div class="form-button">
            <button class="button-input" id="btn-enviar"> enviar</button>
        </div>
    </form>
        <div class="form-button">
            <button class="button-input" id="btn-reg">registrarse</button>
        </div>
    

</body>
</html>

