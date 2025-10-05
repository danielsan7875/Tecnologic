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
                    <a href="#" class="nav-link active-link">
                        <i class="fa-solid fa-house-laptop"></i> Inicio
                    </a>
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-chart-pie"></i> Finanzas
                    </a>
                </div>

                <p class="sidebar-separator">GESTIONAR</p>
                <div class="nav flex-column">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-mobile-screen-button"></i> Productos
                    </a>
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-cart-shopping"></i> Venta
                    </a>
                     <a href="#" class="nav-link">
                       <i class="fa-solid fa-truck-ramp-box"></i> Compra
                    </a>
                    <a href="#" class="nav-link">
                         <i class="fa-solid fa-user-group"></i> Cliente
                    </a>
                      </a>
                         <a href="#" class="nav-link">
                          <i class="fa-solid fa-laptop-file"></i> Cierre Semanal
                    </a>
                </div>

                <p class="sidebar-separator">Catalogar</p>
                <div class="nav flex-column">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-truck-moving"></i> Proveedor
                    </a>
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-shapes"></i> Categoria
                    </a>
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-tag"></i> Marca
                    </a>
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-credit-card"></i> Metodo Pago
                    </a>
                </div>

                <p class="sidebar-separator">Administrar Usuario</p>
                <div class="nav flex-column">
                    <a href="#" class="nav-link">
                           <i class="fa-solid fa-user-gear"></i> Usuario
                    </a>
                    <a href="#" class="nav-link">
                            <i class="fa-solid fa-users"></i> Rol
                    </a>
                   
                </div>
            </div>

        </nav>
