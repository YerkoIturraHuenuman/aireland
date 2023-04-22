document.getElementById("btn_filter").onclick = function (){
    modal_menu_filter();
  }
  document.getElementById("btn_filter_exit").onclick = function (){
    modal_menu_filter();
  }
  document.getElementById("btn_ordendar").onclick = function (){
    modal_ordernar();
  }
  function modal_menu_filter()
{
  document.getElementById("modal_menu_filtro").classList.toggle("menu-filter"); 
  document.getElementById("modal_menu_filtro").classList.toggle("display-none"); 
}
function modal_ordernar()
{
  document.getElementById("modal_ordenar").classList.toggle("modal-ordenar"); 
  document.getElementById("modal_ordenar").classList.toggle("display-none"); 

  //document.getElementById("modal_ordenar").classList.toggle("display-none"); 
}