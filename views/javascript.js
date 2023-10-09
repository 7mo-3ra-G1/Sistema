const carousel = document.querySelector('.carousel');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');
const images = document.querySelectorAll('.carousel img');

let currentIndex = 0;

function showImage(index) {
    if (index < 0) {
        currentIndex = images.length - 1;
    } else if (index >= images.length) {
        currentIndex = 0;
    }

    // Ocultar todas las imágenes
    images.forEach((img, i) => {
        if (i === currentIndex) {
            img.style.display = 'block';
        } else {
            img.style.display = 'none';
        }
    });
}

prevBtn.addEventListener('click', () => {
    currentIndex--;
    showImage(currentIndex);
});

nextBtn.addEventListener('click', () => {
    currentIndex++;
    showImage(currentIndex);
});

showImage(currentIndex);
