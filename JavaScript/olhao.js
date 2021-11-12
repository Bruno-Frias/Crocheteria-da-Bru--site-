"use strict";
const input = document.querySelector('.senha');
const button = document.querySelector('.olhoaberto_cad');
button.addEventListener('click', olhoaberto_cad);
function olhoaberto_cad(){
  if(input.type == "password"){
    input.type = "text";
    button.textContent = "😃";
  }else{
    input.type = "password";
    button.textContent = "😁";
  }
}
