<div class="loader-screen">
  <div class="loader"></div>
</div>
        <!-- ---------------------------------- -->
        <!-- 1. BARRA LATERAL (SIDEBAR) -->
        <!-- ---------------------------------- -->
        <nav id="sidebar" class="sidebar p-0 d-flex flex-column">
            <div class="p-4">
                <!-- Logo -->
                <h3 class="fw-bold mb-0 text-primary-blue d-flex align-items-center">
                   <!-- Contenedor centrado -->
                    <div class="logo-container">
                          <img src="assets/img/logo/logo.png" alt="Logo" class="logo">
                    </div>
                     <!-- Botón de cierre solo visible en móviles -->
                <button class="btn-close-sidebar d-md-none" onclick="toggleSidebar()" aria-label="Cerrar sidebar">
                   <i class="fa-solid fa-xmark"></i>
                </button>
                </h3>
               

            </div>

            <!-- Menú Principal -->
            <div class="sidebar-menu flex-grow-1 px-3">
                <p class="sidebar-separator">MENU</p>
                <div class="nav flex-column">
                    <a href="?pagina=inicio" class="nav-link <?php echo ($activo === "1") ? 'active-link' : ''; ?>">
                        <i class="fa-solid fa-house-laptop"></i> Inicio
                    </a>
                    <a href="?pagina=finanzas" class="nav-link <?php echo ($activo === "2") ? 'active-link' : ''; ?>">
                        <i class="fa-solid fa-chart-pie"></i> Finanzas
                    </a>
                </div>

                <p class="sidebar-separator">GESTIONAR</p>
                <div class="nav flex-column">
                    <a href="?pagina=producto" class="nav-link <?php echo ($activo === "3") ? 'active-link' : ''; ?>">
                        <i class="fa-solid fa-mobile-screen-button"></i> Productos
                    </a>
                    <a href="?pagina=venta" class="nav-link <?php echo ($activo === "4") ? 'active-link' : ''; ?>">
                        <i class="fa-solid fa-cart-shopping"></i> Venta
                    </a>
                     <a href="?pagina=compra" class="nav-link <?php echo ($activo === "5") ? 'active-link' : ''; ?>">
                       <i class="fa-solid fa-truck-ramp-box"></i> Compra
                    </a>
                    <a href="?pagina=cliente" class="nav-link <?php echo ($activo === "6") ? 'active-link' : ''; ?>">
                         <i class="fa-solid fa-user-group"></i> Cliente
                    </a>
                      </a>
                         <a href="?pagina=cierre" class="nav-link <?php echo ($activo === "7") ? 'active-link' : ''; ?>">
                          <i class="fa-solid fa-laptop-file"></i> Cierre Semanal
                    </a>
                </div>

                <p class="sidebar-separator">Catalogar</p>
                <div class="nav flex-column">
                    <a href="?pagina=proveedor" class="nav-link <?php echo ($activo === "8") ? 'active-link' : ''; ?>">
                        <i class="fa-solid fa-truck-moving"></i> Proveedor
                    </a>
                    <a href="?pagina=categoria" class="nav-link <?php echo ($activo === "9") ? 'active-link' : ''; ?>">
                        <i class="fa-solid fa-shapes"></i> Categoria
                    </a>
                    <a href="?pagina=marca" class="nav-link <?php echo ($activo === "10") ? 'active-link' : ''; ?>">
                        <i class="fa-solid fa-tag"></i> Marca
                    </a>
                    <a href="?pagina=metodopago" class="nav-link <?php echo ($activo === "11") ? 'active-link' : ''; ?>">
                        <i class="fa-solid fa-credit-card"></i> Metodo Pago
                    </a>
                </div>

                <p class="sidebar-separator">Administrar Usuario</p>
                <div class="nav flex-column">
                    <a href="?pagina=usuario" class="nav-link <?php echo ($activo === "12") ? 'active-link' : ''; ?>">
                           <i class="fa-solid fa-user-gear"></i> Usuario
                    </a>
                    <a href="?pagina=rol" class="nav-link <?php echo ($activo === "13") ? 'active-link' : ''; ?>">
                            <i class="fa-solid fa-users"></i> Rol
                    </a>
                   
                </div>
            </div>

        </nav>
