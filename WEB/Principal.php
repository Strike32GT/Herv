<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Principal.css">
    <link rel="icon" type="image/png" href="../IMAGENES/logo.png">
    <title>Bienvenida</title>
    <script src="https://kit.fontawesome.com/YOUR-KIT-ID.js" crossorigin="anonymous"></script>
</head>
<body>
     <header>
        <div class="navbar">
            <div class="logo"><a href="Principal.html">Herv</a></div>
            <ul class="links">
                <li><a href="Principal.html">Inicio</a></li>
                <li><a href="Nosotros.html">Conócenos</a></li>
                <li><a href="Busqueda.html">Búsqueda</a></li>
                <li><a href="Donaciones.html">Donaciones</a></li>
                <li><a href="Foro.html">Foro</a></li>
            </ul>



            <a class="action_btn" href="<?php echo isset($_SESSION['nombre']) ? '../Aplic_Web/Cerrar_Sesion/logout.php' : 'Login.html'?>">
                <?php
                    echo isset($_SESSION['nombre'])
                    ? "Bienvenido, ". htmlspecialchars($_SESSION['nombre']). " || Cerrar Sesión" : "Login";
                ?>
            </a>    

            
            
            
            
            
            <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>


        <div class="dropdown_menu">
            <ul>
                <li><a href="#hero">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#" class="action_btn">Login</a></li>
            </ul>
        </div>


     </header>
     
     <main>
        <section id="hero">
            <h1>Bienvenido</h1>
            <p>Aquí encontraras varias carreras universitarias<br />
                o trabajos, de acuerdo a tus habilidades!</p>
        </section>
     </main>


     <script>
        const toggleBtn=document.querySelector('.toggle_btn')
        const toggleBtnIcon=document.querySelector('.toggle_btn i')
        const dropDownMenu=document.querySelector('.dropdown_menu')

        toggleBtn.onclick=function (){
            dropDownMenu.classList.toggle('open')
            const isOpen=dropDownMenu.classList.contains('open')

            toggleBtnIcon.classList = isOpen
            toggleBtnIcon.classList.remove('fa-bars','fa-xmark');
            toggleBtnBtnIcon.classList.add(isOpen ? 'fa-xmark' : 'fa-bars');
        }
     </script>
</body>
</html>