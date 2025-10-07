const faq_item = document.getElementsByClassName("faq-item"); 
const faq_question = document.getElementsByClassName("faq-question"); 
const faq_answers = document.getElementsByClassName("faq-answers"); 
 
function toggleQuestion(button) { 
  const event = button.nextElementSibling; 
  event.style.display = (event.style.display === "block") ? "none" : "block"; 
} 
 
const modal = document.getElementById("PopModal"); 
const open = document.getElementById("openOffer"); 
const close = document.getElementById("closeOffer"); 
 
open.onclick = () => { 
  modal.style.display = "block"; 
}; 
 
close.onclick = () => { 
  modal.style.display = "none"; 
};  
 
 
window.onclick = (event) => { 
  if (event.target === modal) { 
    modal.style.display = "none"; 
  } 
}; 