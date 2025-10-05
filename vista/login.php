<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Tecnologic World</title>

    <!-- Incluir Bootstrap 5.8 -->
    <link id="pagestyle" href="assets/librerias/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    
    <!-- Incluir Iconos (Font Awesome para íconos básicos) -->
    <link rel="stylesheet" href="assets/librerias/fontawesome/css/all.min.css" />
 
    <!-- Incluir Tailwind CSS CDN para facilitar la implementación de colores y sombras -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="assets/css/login.css" rel="stylesheet" />

    <link rel="icon" type="image/png" href="assets/img/logo/icono.png">


</head>
<body>

    <!-- Contenedor de las formas orgánicas de fondo -->
    <div class="background-shapes">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
        <div class="shape shape-4"></div>
    </div>

    <!-- Contenedor Principal (Centrado Vertical y Horizontal) -->
    <div class="container d-flex align-items-center justify-content-center min-vh-100 py-5">
        <div class="row w-100 align-items-center">

            <!-- Columna del Formulario (5 de 12, centrado en móvil) -->
            <div class="col-lg-5 col-md-8 mx-auto" style="z-index: 10;">
                <div class="login-card">
                    <!-- Logo (Simulación de la C con los colores) -->
                    <div class="d-flex align-items-center mb-5">
                      
                        <img src="assets/img/logo/logo.png" width="80" height="80" >
                    </div>

                    <h2 class="fw-bold mb-4">Inicio de Session</h2>



                    <!-- Separador OR -->
                    <div class="d-flex align-items-center mb-4">
                        <div class="flex-grow-1 border-top border-gray-300"></div>
                        <span class="px-3 text-muted text-sm">Acceder a la Sistema</span>
                        <div class="flex-grow-1 border-top border-gray-300"></div>
                    </div>

                    <!-- Formulario de Correo/Contraseña -->
                    <form action="?pagina=inicio" method="POST">
                        <div class="mb-3">
                             <label class="form-check-label">
                                   <i class="fa-solid fa-id-card"></i> N° Cedula:
                             </label>
                            <input type="text" class="form-control" placeholder="Ej: 10123023">
                        </div>
                            <label class="form-check-label">
                               <i class="fa-solid fa-lock"></i> Contraseña
                            </label>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Ej: Contraseña">
                            <span class="input-group-text">
                                <i class="fa-solid fa-eye"></i>
                            </span>
                        </div>

                        <!-- Checkbox y ¿Olvidaste la Contraseña? -->
                        <div class="d-flex justify-content-md-end mb-4">
                            
                            <a href="#" class="text-sm fw-bold text-decoration-none" style="color: var(--primary-purple);">
                                ¿Olvidaste tu contraseña?
                            </a>
                        </div>

                        <!-- Botón de Login -->
                        <button type="submit" class="btn btn-login-gradient w-100 mb-4">
                            Entrar
                        </button>
                        <div class="d-flex align-items-center mb-4">
                            <div class="flex-grow-1 border-top border-gray-300"></div>
                            <span class="px-3 text-muted text-sm">© desarrolado Dev.Daniel y Dev.Niccol</span>
                        <div class="flex-grow-1 border-top border-gray-300"></div>
                    </div>
                    </form>

                   
                   
                </div>
            </div>

            <!-- Columna del Eslogan (7 de 12, se oculta en móvil) -->
            <div class="col-lg-7 d-none d-lg-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="slogan-text ps-5 mb-3">
                    TECNOLOGIC WORLD <br> J-000000-1
                </h1>
                <hr class="bg-black">
                <h1 class="ps-5">Control Inventario | Compra y Venta</h1>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (bundle con Popper) -->
    <script type="text/javascript" src="assets/librerias/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
