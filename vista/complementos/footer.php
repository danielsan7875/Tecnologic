<!-- 2.3. FOOTER (Simulado dentro del cuerpo principal) -->
                <!-- El footer es simple y responsive -->
                <footer class="mt-5 pt-3 border-top text-center text-muted text-sm">
                    <p class="mb-2">&copy; 2025 Desarrollado por DEV.Daniel y DEV.Niccol | Tecnologic World</p>
                    <p class="mb-0 d-block d-md-none"> Tecnologic World </p>
                </footer>
            </div>

        </div>
    </div>

    <!-- Bootstrap JS (bundle con Popper) -->
    <script type="text/javascript" src="assets/librerias/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/librerias/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="assets/librerias/alert/sweetalert2.js"></script>
    <script type="text/javascript" src="assets/librerias/momentjs/momentjs.js"></script>
    <script type="text/javascript" src="assets/librerias/datatables/datatables.min.js"></script>

    <script>
        // Inicializar los íconos de Lucide
        lucide.createIcons();

        // Función para manejar la visibilidad dels idebar en dispositivos pequeños
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.querySelector('.overlay');
            sidebar.classList.toggle('active');
            overlay.classList.toggle('active');
        }
    
        
        document.addEventListener("DOMContentLoaded", function () {
        const saludoElement = document.getElementById("saludo");
        const horaActual = moment().hour(); // Obtiene la hora actual (0–23)
        let saludo = "";

        if (horaActual >= 5 && horaActual < 12) {
          saludo = "Buenos días, estimado usuario.";
        } else if (horaActual >= 12 && horaActual < 18) {
          saludo = "Buenas tardes, estimado usuario.";
        } else {
          saludo = "Buenas noches, estimado usuario.";
        }

        saludoElement.textContent = saludo;
      });

      
    </script>
<script>
  $(document).ready(function () {
    // Mostrar el botón al bajar
    $(window).scroll(function () {
      if ($(this).scrollTop() > 200) {
        $('#btnSubir').fadeIn();
      } else {
        $('#btnSubir').fadeOut();
      }
    });

    // Subir al hacer clic
    $('#btnSubir').click(function () {
      $('html, body').animate({ scrollTop: 0 }, 600);
      return false;
    });
  });
</script>

    <!-- Button trigger modal -->

<button id="btnSubir" class="btn btn-primary rounded-circle shadow" title="Volver arriba">
  <i class="fa-solid fa-arrow-up"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="cerrarmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
      <div class="modal-body">
        <br>
            <div class="text-center mb-5">
              <i class="fa-solid fa-question fa-beat" style="font-size:70px; color:#1c76aa;"></i>
            </div>

          
          <h1 class="fs-2 text-center mb-2">¿Deseas cerrar la session?</h1> 

          <div class="d-flex justify-content-center gap-3 mt-4">
            <form action="?pagina=login" method="POST">
            <button type="submit" class="btn btn-success" style="width:100px; height:50px;">
              SI
            </button>
            </form>
            <button type="button" class="btn btn-secondary" style="width:100px; height:50px;" data-bs-dismiss="modal">
              NO
            </button>
          </div>
        <br>
      </div>
      
    </div>
  </div>
</div>
    