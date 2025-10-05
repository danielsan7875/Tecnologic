 <!-- ---------------------------------- -->
        <!-- 2. CONTENIDO PRINCIPAL (NAV + CUERPO + FOOTER) -->
        <!-- ---------------------------------- -->
        <div class="main-content-wrapper">
            
            <!-- 2.1. BARRA DE NAVEGACIÓN SUPERIOR (NAV) -->
            <nav class="navbar navbar-expand-lg navbar-light navbar-top">
                <div class="container-fluid">
                    <!-- Botón para mostrar el sidebar en móvil -->
                    <button class="btn d-lg-none me-3" type="button" onclick="toggleSidebar()">
                        <i class="fas fa-bars"></i>
                    </button>
                    
                    <!-- Título de la página -->
                    <div class="d-flex flex-column me-auto">
                        <h4 class="fw-bold mb-0"><?php echo $vista ?></h4>
                        <p class="text-sm text-muted mb-0" id="saludo"> </p>
                    </div>

                    <!-- Iconos y Perfil -->
                    <div class="d-flex align-items-center">
                        <a href="#" class="btn btn-link text-color-dark p-2" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">
                           <i class="fa-solid fa-circle-question fs-3" style="color:#1f2d7e;"></i>
                        </a>
                        <a href="#" class="btn btn-link text-color-dark p-2 me-3">
                              <i class="fa-solid fa-moon fs-3" style="color:#1f2d7e;"></i>
                        </a>
                        
                      <!-- Perfil con Dropdown -->
                        <div class="dropdown">
                          <button class="btn btn-profile d-flex align-items-center" type="button" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="text-end me-3 d-none d-md-block">
                              <p class="fw-bold mb-0">Ferra Alexandra</p>
                              <p class="text-sm text-muted mb-0">Administrador</p>
                            </div>
                          
                            <i class="fa-solid fa-circle-user  fs-3 rounded-circle shadow-lg" alt="Avatar" width="40" height="40" style="color:#1c76aa;"></i>
                          </button>
                          <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="profileDropdown">
                                  <li>
                                  <a class="dropdown-item d-flex align-items-center" href="#">
                                      <i class="fa-solid fa-circle-user me-2 fs-5" style="color:#1f2d7e;"></i> <span>Mi perfil</span>
                                  </a>
                              </li>
                              
                            <li>
                              <a class="dropdown-item d-flex align-items-center" style="background-color: #cbd3ffff;" href="#" data-bs-toggle="modal" data-bs-target="#cerrarmodal">
                                <i class="fa-solid fa-right-to-bracket me-2 fs-5" style="color:#1f2d7e;"></i>
                                <span><b>Cerrar sesión</b></span>
                              </a>
                            
                            </li>

                          </ul>
                        </div>

                    </div>
                </div>
            </nav>


<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" >
  <div class="offcanvas-header bg-primer">
    <h5 id="offcanvasRightLabel">Preguntas Frecuetes</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    ...
  </div>
</div>

