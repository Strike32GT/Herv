document.addEventListener("DOMContentLoaded",function(){
    const iconTash=document.getElementById("tash");
    const comentarios= document.getElementById("message");
    const nickname=document.getElementById("user");
    const form= document.querySelector("form");
    const answer=document.getElementById("answers");
    const foro_answer=document.getElementById("foro-answers")
    const comentar_de_nuevo=document.getElementById("comentar_de_nuevo");
    const startcoment=document.getElementById("startcoment");
    foro_answer.style.display="none";



    iconTash.addEventListener("click",function (){
        if(comentarios){
            comentarios.value="";
        }
        iconTash.style.color="gray";

        setTimeout(()=> {
            iconTash.style.color="";
        },70);
    });

    nickname.addEventListener("blur",function(){
        const valor=nickname.value.trim();
        if(!valor.startsWith("@")){
            alert("El usuario debe comenzar con el símbolo @");
        }
    });

   
    form.addEventListener("submit",function(event){
        event.preventDefault();

        const user=nickname.value.trim();
        const message=comentarios.value.trim();

        if(user=="@"){
            alert("Introduzca algún nickname y no solo coloque @");
            return;
        }

        if(message ==""){
            alert("Por favor introduzca un comentario");
            return;
        }

        const newasnwer=document.createElement("div");
        newasnwer.classList.add("mb-3","p-2","border","rounded");

        newasnwer.innerHTML = `<strong>${escapeHtml(user)}</strong><br>${escapeHtml(message)}`;
        answer.appendChild(newasnwer);
    
        foro_answer.style.display="block";
        startcoment.style.display="none";

        nickname.value="";
        comentarios.value="";
    });     

    comentar_de_nuevo.addEventListener("click",function(event){
        event.preventDefault();
        startcoment.style.display="block";
        foro_answer.style.display="none";
    });
    

});

function escapeHtml(text){
    const div=document.createElement("div");
    div.textContent=text;
    return div.innerHTML;
}

