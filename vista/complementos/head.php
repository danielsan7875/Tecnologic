<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" type="image/png" href="assets/img/logo/icono.png">

    <!-- Incluir Bootstrap 5.3 CDN -->
     <link id="pagestyle" href="assets/librerias/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Incluir Tailwind CSS CDN para utilities de color y sombra mejoradas (combina bien con B5) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Incluir Iconos (Font Awesome para íconos básicos) -->
    <link rel="stylesheet" href="assets/librerias/fontawesome/css/all.min.css" />

    <!-- Incluir Lucide Icons (o similar) para íconos modernos -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <link href="assets/css/admin.css" rel="stylesheet" />

     <script src="assets/js/jquery.min.js"></script>

    <link rel="stylesheet" href="assets/librerias/datatables/datatables.min.css">

    <script>
    $(window).on("load", function () {
        $(".loader-screen").fadeOut("slow", function () {
        $("#contenido").fadeIn("slow");
    });
    
  });
</script>