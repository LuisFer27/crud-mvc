<!-- evaluación agencia demoños@author $Luis Fernando Mendez Barrera@since 2025-01-30 @version 1.0.0Html que permite registrar usuarios:-->
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<body>
    <div id="register">
        <h3 class="text-center text-white pt-5">Registro</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="?action=register" method="post">
                            <h3 class="txt-center text-info">Regístrate</h3>
                            <div class="form-group">
                                <label for="username" class="txt-info">
                                    Nombre de usuario:
                                </label>
                                <br>
                                <input type="text" name="username" id="username" class="form-control" placeholder="Nombre de usuario">
                                <label for="password" class="txt-info">
                                    Contraseña:
                                </label>
                                <br>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="RegisterSubmit" class="btn btn-info btn-md" value="submit">
                            </div>
                            <div id="reg_link" class="text-right">
                                <a href="?action=login" class="text-info">Iniciar Sesión</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</body>
</html>