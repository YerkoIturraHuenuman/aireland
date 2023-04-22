document.getElementById('i_s').onchange = function (e){
    let reader = new FileReader ();
    reader.readAsDataURL(e.target.files[0]);
    reader.onload = function (){
        let preview = document.getElementById('img_prev2');
        imagen = document.createElement('img');
        imagen.src = reader.result;
        imagen.className += "h-100 w-100";
        //imagen.className += "h-100"; 
        //ocument.getElementById('i_s').classList.add("display-none"); 
        preview.append(imagen);
    }
}