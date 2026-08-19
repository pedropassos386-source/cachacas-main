
const imageContainer = document.querySelector('.imagem-principal');
const boralinaImage = document.querySelector('#img');

imageContainer.addEventListener('mousemove', (e) => {
    const rect = imageContainer.getBoundingClientRect();
    console.log(rect);

    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;

    const xPercent = (x / rect.width) * 100;
    const yPercent = (y / rect.height) * 100;

    boralinaImage.style.transformOrigin = `${xPercent}% ${yPercent}%`;
    boralinaImage.style.transform = 'scale(2)';
});

imageContainer.addEventListener('mouseleave', () => {
    boralinaImage.style.transformOrigin = 'center';
    boralinaImage.style.transform = 'scale(1)';
});
