<!-- evaluación agencia demoños@author $Luis Fernando Mendez Barrera @since 2025-01-30 @version 1.0.0 Html que permite registrar productos: -->
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
        <h3 class="text-center text-white pt-5">Registro de productos</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="?action=register" method="post">
                            <h3 class="txt-center text-info">Nuevo producto</h3>
                            <div class="form-group">
                                <label for="titulo" class="txt-info">
                                    Nombre del producto:
                                </label>
                                <br>
                                <input type="text" name="titulo" id="titulo" class="form-control" placeholder="Nombre del producto">
                                <label for="username" class="txt-info">
                                    Descripción:
                                </label>
                                <br>
                                <input type="text" name="descripcion" id="descripcion" class="form-control" placeholder="Descripción del producto">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="RegisterSubmit" class="btn btn-info btn-md" value="submit">
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