<header>

    <!--Imagen Principal-->
    <div class="container">
        <div class="row">
            <img src="webroot/img/Pag/SCRIPT(300).png" style="height:150;" class="img-responsive img-rounded">
            <nav class="navbar navbar-inverse menu" role="navigation">
                <!--Fin De Imagen Principal-->

                <!--Inicio Del Menu De Opciones-->
                <!--El logotipo y el icono que despliega el menú se agrupan
            para mostrarlos mejor en los dispositivos móviles -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#BarraDeNavegacion">
                        <span class="sr-only">Desplegar/Ocultar Menu Header</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand glyphicon glyphicon-home" href="Index.php"></a>
                </div>

                <!--INICIA EL MENU HEADER  -->
                <!-- Agrupar los enlaces de navegación, los formularios y cualquier
            otro elemento que se pueda ocultar al minimizar la barra -->
                <!-- Botones de la barra de busqueda -->
                <div class="collapse navbar-collapse" id="BarraDeNavegacion">
                    <ul class="nav navbar-nav">
                        <li><a href="Busqueda_usu.php">Buscador</a></li>
                        <li><a href="#">Noticias</a></li>
                        <li><a href="#">Nosotros</a></li>
                    </ul>

                    <!-- Botones de registro y loging -->
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="glyphicon glyphicon-user" data-toggle="modal" data-target="#myModalLog"> Entra</a>
                        </li>
                        <li>
                            <a href="#" class="glyphicon glyphicon-th-list" data-toggle="modal" data-target="#myModalReg"> Registrate</a>
                        </li>
                    </ul>
                    <!-- Barra de navegacion
                    <div class="container">
                        <div class="row">
                            <?php //include("Bar_busqueda_header.php"); ?>
                        </div>
                    </div>           -->

                </div>
            </nav>
        </div>
    </div>
    <!--Fin Del Menu de Opciones-->
</header>
