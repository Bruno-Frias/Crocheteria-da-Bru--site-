"use strict";
const input = document.querySelector('.senha_cad');
const button = document.querySelector('olhoaberto_cad_conf');
button.addEventListener('click', olho_conf);
function olho_conf(){
  if(input.type == "password"){
    input.type = "text";
    button.textContent = "😃";
  }else{
    input.type = "password";
    button.textContent = "😁";
  }
}
