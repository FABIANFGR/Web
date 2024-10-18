<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz de Satisfacción del Cliente</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <!-- Área para el logo -->
        <div class="logo">
            <img src="img\scne.png" alt="Logo de la Empresa">
        </div>
        
        <h1>Encuesta de Satisfacción del Cliente</h1>
        <form id="quizForm">
            <label for="experiencia">1. Comunicas tu experiencia en nuestras oficinas:</label>
            <input type="text" id="experiencia" name="experiencia" required>

            <label for="tipoCliente">2. ¿Qué tipo de cliente eres?</label>
            <select id="tipoCliente" name="tipoCliente" required>
                <option value="">Selecciona una opción</option>
                <option value="Regular">Regular</option>
                <option value="Ocasional">Ocasional</option>
                <option value="Frecuente">Frecuente</option>
            </select>

            <label for="calificacion">3. ¿Cómo calificarías el proceso de gestionar la red?</label>
            <input type="number" id="calificacion" name="calificacion" min="1" max="10" required>

       <center> <a class="robert" href="http://localhost:8080/rentcar/index.html" target="_blank">Enviar!</a></center>
        </form>
        <div id="resultado" class="resultado"></div>
    </div>
    <script src="script.js"></script>
</body>
</html>