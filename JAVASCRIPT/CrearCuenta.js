dominios=['@gmail.com','@outlook.com','@hotmail.com','@live.com'];
document.addEventListener('DOMContentLoaded',function(){
    const formulario= document.getElementById('form');
    const usuario=document.getElementById('usuario');
    const nombre=document.getElementById('nombre');
    const apellido=document.getElementById('apellido');


    formulario.addEventListener('submit', function(e){
        const valor=usuario.value.trim();
        const v_nombre=nombre.value.trim();
        const v_apellido=apellido.value.trim();




        const verif=dominios.some(dominio=>valor.endsWith(dominio));
        if(!verif){
            e.preventDefault();
            alert("El correo debe terminar en: "+dominios.join(', '));
            return;
        }

        const prim_letra= v_nombre.charAt(0);
        if(prim_letra !==prim_letra.toUpperCase()){
            e.preventDefault();
            alert("El nombre debe comenzar con letra Mayúscula");
            return;
        }

        const prim_letra_apell=v_apellido.charAt(0);
        if(prim_letra_apell !==prim_letra_apell.toUpperCase()){
            e.preventDefault();
            alert("El apellido debe comenzar con letra Mayúscula")
            return;
        }
    });
});