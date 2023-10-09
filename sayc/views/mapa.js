const mapSections = document.querySelectorAll('.map-container .section');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');
let currentMapIndex = 0;

function showMap(index) {
    mapSections.forEach((section, i) => {
        if (i === index) {
            section.style.display = 'block';
        } else {
            section.style.display = 'none';
        }
    });
}

prevBtn.addEventListener('click', () => {
    currentMapIndex = (currentMapIndex - 1 + mapSections.length) % mapSections.length;
    showMap(currentMapIndex);
});

nextBtn.addEventListener('click', () => {
    currentMapIndex = (currentMapIndex + 1) % mapSections.length;
    showMap(currentMapIndex);
});

// Mostrar el primer mapa al cargar la página
showMap(currentMapIndex);
