<?php 

//print_r($datos);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
    <title>Document</title>
</head>
<body>
    <style>
        .foto-familia{
    width: 100%;
    height: 100%;
}

.contenedor{
    width: auto;
    height:auto ;
}
    </style>
<div class="row pt-4 contenedor">
            <div class="container">
            <div class="row">
            <div class="col ">
                <img class="foto-familia" src="https://d9b6rardqz97a.cloudfront.net/wp-content/uploads/2019/10/12172443/seguro-de-hogar_personas-1-1023x475.jpg" alt="">
            </div>
            <div class="col text-center">
                <form method="POST">
                    <h5 class="pt-4 mt-4 pb-2">Ingresa tus datos de inicio</h5>
                    <label class=" mt-4 pb-2">Ingresa tu correo</label></br>
                    <input type="text" class="form-control" name="email"></br>
                    <label class="pb-2">Ingresa tu contraseña</label></br>
                    <input type="password" class="form-control" name="password"></br></br>
                    <input class="btn btn-success" type="submit" value="Entrar">
                    <form><br>
                  
                    <label class="pt-4"><a href="./c_register">Registrate</label></a>
                    
            </div>
        </div>
            </div>
        </div>

 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>