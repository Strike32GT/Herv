const hab=document.getElementById('habilidades');
const form=document.querySelectorAll('form')[1];
const alerta=document.getElementById('alertaHabilidades');


form.addEventListener('submit',function(e){
    const valor=hab.value.trim();
    const partes=valor.split(",").map(p=>p.trim()).filter(p=>p.length>0);
    

    if(partes.length<3){
        e.preventDefault();
        alerta.classList.remove("d-none");
    }
    else{
        alerta.classList.add("d-none");
    }

});

/*Hace desaparecer a la laerta mientras trata de seguir escribiendo*/
hab.addEventListener('input',function(){
    const valor=hab.value.trim();
    const partes=valor.split(",").map(p=>p.trim()).filter(p=>p.length>0);

    if(partes.length>=3){
        alerta.classList.add("d-none");
    } else{
        alerta.classList.add("d-none");
    }
});