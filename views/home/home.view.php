<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <title>Document</title>
    
</head>
<body>
<div class="container mt-5">
        <h2>Formulario de Informacion</h2>
        <h2>Careloco</h2>
        <form id="personaForm" method="POST">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            
            <div class="mb-3">
                <label for="direccion" class="form-label">Cedula:</label>
                <input type="text" class="form-control" id="cedula" name="direccion" required>
            </div>
            
            
            <div class="mb-3">
                <label for="correo" class="form-label">Correo electrónico:</label>
                <input type="email" class="form-control" id="correo" name="correo" required>
            </div>
            
            <div class="mb-3">
                <label for="telefono" class="form-label">Número de teléfono:</label>
                <input type="tel" class="form-control" id="telefono" name="telefono" required>
            </div>
            
           
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="public/js/app.js"></script>
    
</body>
</html>