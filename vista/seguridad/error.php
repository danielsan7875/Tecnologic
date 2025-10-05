<!DOCTYPE html>
<html lang="es">
<head>
   <?php include 'vista/complementos/head.php'; ?>
   <title>Inicio | Tecnologic World</title>
<style>
    body {
      margin: 0;
      background-color: #0c2e42; 
      color: white;
      font-family: 'Segoe UI', sans-serif;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }

    .error-container {
      max-width: 500px;
    }

    .error-code {
      font-size: 8rem;
      font-weight: bold;
      color: #ffffff;
    }

    .error-message {
      font-size: 1.5rem;
      margin-bottom: 1rem;
    }

    .btn-home {
      background-color: #ffffff;
      color: #1f2d7e;
      border: none;
      padding: 0.6rem 1.2rem;
      font-weight: 500;
      border-radius: 8px;
      transition: all 0.3s ease;
    }

    .btn-home:hover {
      background-color: #e0e0e0;
      color: #1f2d7e;
    }
  </style>
</head>
<body sytle="background-color:#1c76aa !important;">

  <div class="error-container">
    <div class="error-code">404</div>
    <div class="error-message">Página no encontrada</div>
    <p>Lo sentimos, el recurso que buscas no existe o ha sido movido.</p>
    <a href="?pagina=login" class="btn btn-home mt-3">Volver al inicio</a>
  </div>
  
</body>
</html>
