
import searchFilters from "./js/filtro_busqueda.js";

const d = document;
d.addEventListener("DOMContentLoaded", (e) => {

 searchFilters ("#buscar",".bs");   
})



function borde_sombra()
{
  document.getElementById("input-radio").classList.add("borde-sombra");
  document.getElementById("input-radio2").classList.remove("borde-sombra");
}
function borde_sombra2()
{
  document.getElementById("input-radio2").classList.add("borde-sombra");  
  document.getElementById("input-radio").classList.remove("borde-sombra");
}
function modal_menu_hamurger()
{
  document.getElementById("modal-menu-hamburger").classList.add("menu-ham");  
}

document.getElementById("btn_hamburger").onclick = function (){
  modal_menu_hamurger();
}
document.getElementById("input-radio").onclick = function (){
    borde_sombra();
}
document.getElementById("input-radio2").onclick = function (){
    borde_sombra2();
}



