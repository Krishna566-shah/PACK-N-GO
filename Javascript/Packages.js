const sliders = document.querySelectorAll('.slider-container'); 
 
sliders.forEach(container => { 
  const track = container.querySelector('.slider-track'); 
  const slides = container.querySelectorAll('.slide-img'); 
  let index = 0; 
 
  function slideNext() { 
    index = (index + 1) % slides.length; 
    const offset = -index * 600; 
    track.style.transform = `translateX(${offset}px)`; 
  } 
 
  setInterval(slideNext, 3000); 
});