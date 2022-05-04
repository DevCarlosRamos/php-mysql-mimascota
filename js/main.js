const imgCarrusel = document.querySelectorAll('.carrusel-container div img');
const imgContainer = document.querySelector('.img-container');

window.addEventListener('DOMContentLoaded',() =>{
   imgCarrusel[0].parentElement.classList.add('active');
});

imgCarrusel.forEach((image) => {
   image.addEventListener('mouseover', () => {
      imgContainer.querySelector('img').src = image.src;
      resetActivateImg();
      image.parentElement.classList.add('active');
   });
});

function resetActivateImg(){
   imgCarrusel.forEach((img) =>{
      img.parentElement.classList.remove('active');
   });
}