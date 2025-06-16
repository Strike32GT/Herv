let miCanvas=document.getElementById('MiGrafica').getContext("2d");
var chart= new Chart(miCanvas,{
    type:"bar",
    data:{
        labels:["Wolverine","Gambito","Deadpool","Ciclops"],
        datasets:[
            {
                label:"Mi Grafica de X-men",
                backgroundColor:"rgb(0,0,0)",
                data:[12,20,52,77]
            }
        ]
    }
})