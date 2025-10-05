<!DOCTYPE html>
<html lang="es">
<head>
   <?php include 'complementos/head.php'; ?>
   <title>Inicio | Tecnologic World</title>
 <style>
   


    .bg-s{
    background-color: #e0e0e0ff;
    border-radius: 50px;
    }
    .table-color{
       background-color: #1f2d7e !important;
       color:#fff !important;
    }

    .vista-selector {
  display: inline-block;
  padding: 0.75rem 1.5rem;
  margin: 0 0.5rem;
  border-radius: 50px;
  width: 40%;
  background-color: #a2c8ddff;
  color: #000000;
  text-decoration: none;
  font-weight: 500;
  transition: all 0.3s ease;
  box-shadow: inset 0 0 0 2px transparent;
}

.vista-selector:hover {
  color: #fff;
  background-color: #1f2d7e;
  box-shadow: 0 0 10px #4f61caff;
}

.vista-selector.active {
  background-color: #1c76aa;
      color: #fff;
      box-shadow: 0 0 10px #2494d4ff;
}

.nav-fill {
  justify-content: center;
}

.content-section {
  display: none;
  padding: 2rem;
  border-radius: 12px;
  background-color: rgba(255, 255, 255, 0.05);
  animation: fadeIn 0.5s ease-in-out;
}

@keyframes fadeIn {
  from { opacity: 0; transform: translateY(10px); }
  to { opacity: 1; transform: translateY(0); }
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

     <div class="d-sm-flex align-items-center justify-content-between mb-5">
  <h4 class="mb-0" style="font-size:35px; color: #1f2d7e;">
    <i class="fa-solid fa-mobile-screen-button fs-2" style="color: #1f2d7e;"></i> Producto
  </h4>
 
  <div class="d-flex gap-2">
  <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#registro" id="btnAbrirRegistrar">
    <span class="icon text-white">
      <i class="fas fa-file-medical"></i>
    </span>
    <span class="text-white">Registrar</span>
  </button>

  <button type="button" class="btn btn-primary" id="btnAyuda">
    <span class="icon text-white">
      <i class="fas fa-info-circle"></i>
    </span>
    <span class="text-white">Ayuda</span>
  </button>
</div>
</div>

    <div class="card py-4"><!-- s -->
        <div class="card-body">
        <nav class="nav nav-pills nav-fill mb-4">
            <a class="vista-selector active text-center" href="#" data-target="#telefono">Teléfono</a>
            <a class="vista-selector text-center" href="#" data-target="#accesorio"> Accesorio</a>
        </nav>

  <div id="telefono" class="content-section" style="display: block;"> <!-- D1 -->
    <h1 class="text-primary fs-3 mb-2">Telefono | Inventario</h1>
     <div class="table-responsive">
            <table class="table table-hover" id="myTable" width="100%" cellspacing="0">
              <thead class="table-color">
                <tr>
                  <th class="table-color">Nombre</th>
                  <th class="table-color">Descripcion</th>
                  <th class="table-color">Marca</th>
                  <th class="table-color">Precio</th>
                  <th class="table-color">Stock</th>
                  <th class="table-color"><i class="fa-solid fa-image"></i></th>
                  <th class="table-color">Categoria</th>
                
                </tr>
              </thead>
              <tbody>
              <tr>
                  <td>go</td>
                  <td>ss</td>
                  <td>mmmmmmmm</td>
                  <td>35</td>
                  <td>s</td>
                  <td>go</td>
                  <td>go</td>
                  </tr>
              </tbody>
            </table>
    </div>
  </div><!-- D1 -->

  <div id="accesorio" class="content-section"><!-- D2 -->
    <h1 class="text-primary fs-3 mb-2">Accesorio | Inventario</h1>
    <div class="table-responsive">
            <table class="table table-hover" id="myTable2" width="100%" cellspacing="0">
              <thead class="table-color">
                <tr>
                  <th class="table-color">Nombre</th>
                  <th class="table-color">Descripcion</th>
                  <th class="table-color">Marca</th>
                  <th class="table-color">Precio</th>
                  <th class="table-color">Stock</th>
                  <th class="table-color"><i class="fa-solid fa-image"></i></th>
                  <th class="table-color">Categoria</th>
                
                </tr>
              </thead>
              <tbody>
              <tr>
                  <td>go</td>
                  <td>ss</td>
                  <td>mmmmmmmm</td>
                  <td>35</td>
                  <td>s</td>
                  <td>go</td>
                  <td>go</td>
                  </tr>
              </tbody>
            </table>
    </div>
  </div><!-- D2 -->
  </div>
</div><!-- s -->






   </div><!-- Div principal para respetar los márgenes -->
   <?php include 'complementos/footer.php'; ?>
   <script type="text/javascript" src="assets/js/producto.js"></script>
   <script src="assets/js/demo/datatables-demo.js"></script>
</body>
</html>
