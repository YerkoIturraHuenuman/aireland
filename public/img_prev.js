document.getElementById('i_b').onchange = function (e){
    let reader = new FileReader ();
    reader.readAsDataURL(e.target.files[0]);
    reader.onload = function (){
        let preview = document.getElementById('img_prev');
        imagen = document.createElement('img');
        imagen.src = reader.result;
        imagen.className += "w-100"; 
        document.getElementById('i_b').classList.add("display-none"); 
        preview.append(imagen);
    }
}