<!DOCTYPE html>
<html lang="es">
<head>
   <?php include 'complementos/head.php'; ?>
   <title>Inicio | Tecnologic World</title>
<style>
  .hover-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .hover-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
  }
</style>

</head>
<body>

    <div class="wrapper">
        <!-- Overlay para móvil -->
    <div class="overlay" onclick="toggleSidebar()"></div>

    <?php include 'complementos/sidebar.php'; ?>

    <?php include 'complementos/nav.php'; ?>

    <!-- Div principal para respetar los márgenes -->
    <div class="p-3 p-md-4 flex-grow-1" style="flex-basis: 100%;">

        <div class="row g-4">
                            <!-- 4 Tarjetas de Resumen Superior -->
                            <div class="col-sm-6 col-lg-3">
                                <div class="card p-4 bg-blue-card text-white">
                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                        <i class="fa-solid fa-file-invoice-dollar fs-3 w-6 h-6"></i>
                                    <!--    <span class="badge bg-green-percent py-1 px-2 text-green-percent fw-bold">+2.08%</span> -->
                                    </div>
                                    <p class="text-sm text-white opacity-90 mb-1">Total Ventas</p>
                                    <h5 class="fw-bold mb-0">$ 612.917</h5>
                                    <p class="text-xs text-white opacity-90 mt-1">Telefono + Acesorios</p>
                                </div>
                            </div>
                         
                            <div class="col-sm-6 col-lg-3">
                                <div class="card p-4">
                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                        <i class="fa-solid fa-mobile-screen-button fs-3 w-6 h-6 text-primary-blue"></i>
                                 <!--       <span class="badge bg-green-percent py-1 px-2 text-green-percent fw-bold">+12.4%</span> -->
                                    </div>
                                    <p class="text-sm text-muted mb-1">Total Ventas de Telefonos</p>
                                    <h5 class="fw-bold mb-0">$ 34.760</h5>
                                    <p class="text-xs text-muted mt-1">Solo Telefonos</p>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="card p-4 bg-primer">
                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                    <i class="fa-solid fa-user-group w-6 h-6 fs-3"></i>
                                  <!-- <span class="badge bg-red-percent py-1 px-2 text-red-percent fw-bold">-2.08%</span> -->
                                    </div>
                                    <p class="text-sm text-white opacity-90 mb-1">Total de Cliente</p>
                                    <h5 class="fw-bold mb-0">14.987</h5>
                                    <p class="text-xs text-white opacity-90 mt-1">Cliente Registrado</p>
                                </div>
                            </div>
                            
                            <div class="col-sm-6 col-lg-3">
                                <div class="card p-4">
                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                        <i class="fa-solid fa-bag-shopping fs-3 w-6 h-6 text-primary-blue"></i>
                                     <!--   <span class="badge bg-green-percent py-1 px-2 text-green-percent fw-bold">+12.1%</span> -->
                                    </div>
                                    <p class="text-sm text-muted mb-1">Total Venta de Acesorios </p>
                                    <h5 class="fw-bold mb-0">$ 12.987</h5>
                                    <p class="text-xs text-muted mt-1">solo Acesorios</p>
                                </div>
                            </div>

                            <!-- Gráfico de Hábitos del Cliente -->
                            <div class="col-12">
                                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                    <img src="assets/img/b1.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="assets/img/b2.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="assets/img/b3.png" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                </div>
                            </div>


                             <div class="col-12">
                                <h1>Acceso Rapido</h1>
                              <div class="container py-4">
                                <div class="row justify-content-center g-4">

                                    <!-- Card 1 -->
                                    <div class="col-md-4">
                                    <a href="?pagina=producto" class="text-decoration-none">
                                        <div class="card shadow-sm border-0 h-100 hover-card">
                                        <div class="card-body text-center">
                                            <i class="fa-solid fa-mobile-screen-button fs-1 mb-3" style="color:#1f2d7e;"></i>
                                            <h5 class="card-title text-dark">Inventario | Productos</h5>
                                            <p class="card-text text-muted">Controla el stock, actualiza productos</p>
                                        </div>
                                        </div>
                                    </a>
                                    </div>

                                    <!-- Card 2 -->
                                    <div class="col-md-4">
                                    <a href="?pagina=venta" class="text-decoration-none">
                                        <div class="card shadow-sm border-0 h-100 hover-card">
                                        <div class="card-body text-center">
                                            <i class="fa-solid fa-cart-shopping fs-1 mb-3" style="color:#1f2d7e;"></i>
                                            <h5 class="card-title text-dark">Venta </h5>
                                            <p class="card-text text-muted">Administra procesos de venta</p>
                                        </div>
                                        </div>
                                    </a>
                                    </div>

                                    <!-- Card 3 -->
                                    <div class="col-md-4">
                                    <a href="?pagina=usuario" class="text-decoration-none">
                                        <div class="card shadow-sm border-0 h-100 hover-card">
                                        <div class="card-body text-center">
                                            <i class="fa-solid fa-user-shield fs-1 mb-3" style="color:#1f2d7e;"></i>
                                            <h5 class="card-title text-dark">Usuarios | Empleados</h5>
                                            <p class="card-text text-muted">Gestiona accesos, roles y permisos de usuarios.</p>
                                        </div>
                                        </div>
                                    </a>
                                    </div>

                                </div>
                                </div>

                            </div>
                        </div> <!-- H-->

   </div><!-- Div principal para respetar los márgenes -->
   <?php include 'complementos/footer.php'; ?>
  
</body>
</html>
