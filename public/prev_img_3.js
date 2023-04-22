document.getElementById('i_p').onchange = function (e){
    let reader = new FileReader ();
    reader.readAsDataURL(e.target.files[0]);
    reader.onload = function (){
        let preview = document.getElementById('img_prev_p');
        imagen = document.createElement('img');
        imagen.src = reader.result;
        imagen.className += "p-0 m-0 w-100 h-100 object-1";
        //imagen.className += "h-100"; 
        document.getElementById('i_p').classList.add("display-none"); 
        preview.append(imagen);
    }
}
document.getElementById('i_s1').onchange = function (e){
    let reader = new FileReader ();
    reader.readAsDataURL(e.target.files[0]);
    reader.onload = function (){
        let preview = document.getElementById('img_prev_s1');
        imagen = document.createElement('img');
        imagen.src = reader.result;
        imagen.className += "h-100 w-100";
        //imagen.className += "h-100"; 
        document.getElementById('i_s1').classList.add("display-none"); 
        preview.append(imagen);
    }
}
document.getElementById('i_s2').onchange = function (e){
    let reader = new FileReader ();
    reader.readAsDataURL(e.target.files[0]);
    reader.onload = function (){
        let preview = document.getElementById('img_prev_s2');
        imagen = document.createElement('img');
        imagen.src = reader.result;
        imagen.className += "h-100 w-100";
        //imagen.className += "h-100"; 
        document.getElementById('i_s2').classList.add("display-none"); 
        preview.append(imagen);
    }
}
document.getElementById('i_s3').onchange = function (e){
    let reader = new FileReader ();
    reader.readAsDataURL(e.target.files[0]);
    reader.onload = function (){
        let preview = document.getElementById('img_prev_s3');
        imagen = document.createElement('img');
        imagen.src = reader.result;
        imagen.className += "h-100 w-100";
        //imagen.className += "h-100"; 
        document.getElementById('i_s3').classList.add("display-none"); 
        preview.append(imagen);
    }
}
document.getElementById('i_s4').onchange = function (e){
    let reader = new FileReader ();
    reader.readAsDataURL(e.target.files[0]);
    reader.onload = function (){
        let preview = document.getElementById('img_prev_s4');
        imagen = document.createElement('img');
        imagen.src = reader.result;
        imagen.className += "h-100 w-100";
        //imagen.className += "h-100"; 
        document.getElementById('i_s4').classList.add("display-none"); 
        preview.append(imagen);
    }
}




document.getElementById("borrar_0").onclick = function (e){
    const elements = document.getElementsByTagName('img');
    while(elements.length > 0){
        elements[0].parentNode.removeChild(elements[0]);
    }
    document.getElementById('i_p').classList.remove("display-none"); 
    i_p.value="";
}



document.getElementById("borrar_1").onclick = function (e){
    const elements = document.getElementsByTagName('img');
    while(elements.length > 0){
        elements[0].parentNode.removeChild(elements[0]);
    }
    document.getElementById('i_s1').classList.remove("display-none"); 
    i_s1.value="";
}

document.getElementById("borrar_2").onclick = function (e){
    const elements = document.getElementsByTagName('img');
    while(elements.length > 0){
        elements[0].parentNode.removeChild(elements[0]);
    }
    document.getElementById('i_s2').classList.remove("display-none"); 
    i_s2.value="";
}
document.getElementById("borrar_3").onclick = function (e){
    const elements = document.getElementsByTagName('img');
    while(elements.length > 0){
        elements[0].parentNode.removeChild(elements[0]);
    }
    document.getElementById('i_s3').classList.remove("display-none"); 
    i_s3.value="";
}
document.getElementById("borrar_4").onclick = function (e){
    const elements = document.getElementsByTagName('img');
    while(elements.length > 0){
        elements[0].parentNode.removeChild(elements[0]);
    }
    document.getElementById('i_s4').classList.remove("display-none"); 
    i_s4.value="";
}

