<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa de Mi Escuela</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="header">
        <h1>Mapa de Mi Escuela</h1>

        <p>Aqui podran ver las diferentes actividades que se estan realizando tanto en la planta baja, 
            como el 1er piso, 2do y el taller, tambien poran ver donde se encuentran los baños y la cafeteria</p>
    </header>

    <div class="navigation">
        <button id="prevBtn">Anterior</button>
        <button id="nextBtn">Siguiente</button>
    </div>

    <div class="map-container">
        <section id="planta-baja" class="section">
            <h2 class="section-title">Planta Baja</h2>
            <img class="section-image" src="../img/plantab.png">
        </section>
    
        <section id="primer-piso" class="section">
            <h2 class="section-title">Primer Piso</h2>
            <img class="section-image" src="../img/planta1.png">
        </section>
    
        <section id="segundo-piso" class="section">
            <h2 class="section-title">Segundo Piso</h2>
            <img class="section-image" src="../img/planta2.png">
        </section>
    
        <section id="taller" class="section">
            <h2 class="section-title">Taller</h2>
            <img class="section-image" src="../img/taller.png">
        </section>
    </div>
    

    <footer class="footer">
        <p>© 2023 Tu Escuela</p>
    </footer>

    <script src="mapa.js"></script>
</body>
</html>
