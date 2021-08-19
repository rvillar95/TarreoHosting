
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Validador de RUT HTML5</title>
</head>
<body>
    <form>
        <input type="text" id="rut" name="rut" required oninput="checkRut(this)" onblur="formateaRut(this)" placeholder="Ingrese RUT">
        <button type="submit">Validar RUT y Enviar Form</button>
        <script src="<?php echo base_url() ?>lib/js/func.js" type="text/javascript"></script>

    </form>
</body>
</html>