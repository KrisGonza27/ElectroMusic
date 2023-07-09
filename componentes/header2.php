<header class="header">
        <div class="wrap">
            <div class="contenedor">
                <div class="barra">
                    <a class="logo" href="index.php">
                        <h1 class="logo__nombre no-margin centrar-texto">
                        Electro
                        <span class="logo__bold">Music</span>
                        </h1>
                    </a>
                    <nav class="navegacion">
                        <a href="nosotros.php" class="navegacion__enlace">Nosotros</a>  
                        <a href="contacto.php" class="navegacion__enlace">Contactame</a>   
                        <a href="tipos.php"class="navegacion__enlace">Tipos</a>  
                        <?php if(isset($_SESSION['user_id'])) {?>
                        <a href="cerrar_sesion.php" class="navegacion__enlace">Cerrar Sesión</a>
                        <?php } else { ?>
                        <a href="iniciar_sesion.php" class="navegacion__enlace">Iniciar Sesión</a>    
                        <?php } ?>
                    </nav>
                </div>
            </div>
            <div class="header__texto">
            <h1 class="sign_in_form">Inicia Sesión</h1>
                <span class="sign_in_form"> <a href="registrar.php">Registrate</a></span>

                <form action="iniciar_sesion.php" method="POST">
                <input class="sign_in_form" name="email" type="text" placeholder="Ingresa tu email">
                <input class="sign_in_form" name="password" type="password" placeholder="Ingresa tu Contraseña">
                <input class="sign_in_form submit" type="submit" value="Iniciar">
                </form>
            </div>
        </div>
    </header> 
