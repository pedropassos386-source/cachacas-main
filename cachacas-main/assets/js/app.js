window.addEventListener('DOMContentLoaded', () => {
    
    const image = document.querySelector('.imagem-principal img');
    const image1 = document.querySelector('#front');
    const image2 = document.querySelector('#side');
    
    image1.addEventListener('click', ()=>{
        console.log(image.src);
        
        image.src = image1.src;
        image.alt = image1.alt;
    })
    
    image2.addEventListener('click', ()=>{
        image.src = image2.src;
        image.alt = image2.alt;
    })

})