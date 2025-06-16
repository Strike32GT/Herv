dominios=['@gmail.com','@outlook.com','@hotmail.com','@live.com'];
document.addEventListener('DOMContentLoaded',function(){
    const formulario= document.getElementById('form');
    const usuario=document.getElementById('usuario');

    formulario.addEventListener('submit', function(e){
        const valor=usuario.value.trim();

        const verif=dominios.some(dominio=>valor.endsWith(dominio));
        
        if(!verif){
            e.preventDefault();
            alert("El correo debe terminar en: "+dominios.join(', '));
        }
    });
});