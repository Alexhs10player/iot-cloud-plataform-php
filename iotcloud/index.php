<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
    <link rel="stylesheet" href="styles/stylesheet.css">
    <link rel="stylesheet" href="styles/bulma.css">
    <script src='scripts/script.js'></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>
<body>

    <nav class = 'navbar is-primary'><!-- hacemos una nav bar con color turquesa (ver bulma.io) -->
        <div class ='navbar-brand'>
            <div class="navbar-item">
            <span class="icon">
             <i class="fas fa-cloud"></i>
             </span>  
             <h2 class = "title is-6">Maker Proyects Iot Cloud</h2>
            </div>
           
        </div>
        <div class='navbar-end'>
            <div class="navbar-item">
                <a href="" class ="navbar-link">Inicio</a>
            </div>
            <div class = 'navbar-item'> <!--creamos un apartado item y dentro de este item creamos un botón (el botón lleva al repositorio)-->
                <a 
                    href = 'https://github.com/Alexhs10player/iot-cloud-plataform-php' 
                    class ='button is-dark'
                    target="_blank"
                    >
                        <span class ="icon">
                        <i class="fab fa-github"></i>
                        </span>
                   <span>Github</span> 
                </a>
            </div>
        </div>

        </nav>
    <br>
     <br>


    <div class="container"><!-- sección para añadir placas -->
        <div class="has-text-centered">
            

            <a href="addnewboard.html" class="button is-large is-danger">
                <span class ='icon'>
                    <i class="fas fa-plus"></i> 
                </span>
                <span>Añadir placa</span>

            </a>
           <span> <h4 style = 'color: #990033' class = 'title has-text-centered'>
             Aquí podrás introducir la placa y sus cualidades
             </h4></span>
        

</body>
</html>