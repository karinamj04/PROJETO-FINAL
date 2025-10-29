<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Raiz Saúde - Configurações do Administrador</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/admin.css">
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar p-3">
    <h3 class="mb-4 fw-bold">Raiz Saúde</h3>
    <nav>
      <a href="admin.php">Dashboard</a>
      <a href="crud.php">Pacientes</a>
      <a href="consultas.php">Consultas</a>
      <a href="log.php">Relatórios</a>
      <a href="configuracoes.php" class="active">Configurações</a>
    </nav>
  </div>

  <!-- Main -->
  <div class="flex-grow-1 d-flex flex-column">
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm px-4">
      <div class="ms-auto d-flex align-items-center">
        <span class="me-2 fw-semibold text-success">
          <?php echo $adminNome ?? "Administrador"; ?>
        </span>
        <img src="uploads/admin.jpg" alt="Foto do administrador" class="rounded-circle profile-pic">
      </div>
    </nav>

    <!-- Conteúdo -->
    <main class="p-4 flex-grow-1">
      <div class="card shadow-sm border-0">
        <div class="card-body">
          <h5 class="card-title mb-4 text-success">Configurações do Administrador</h5>
          <form action="upload.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
              <label class="form-label">Nome</label>
              <input type="text" class="form-control" value="<?php echo $adminNome ?? ''; ?>" readonly>
            </div>
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" value="<?php echo $adminEmail ?? ''; ?>" readonly>
            </div>
            <div class="mb-3">
              <label class="form-label">Alterar Foto de Perfil</label>
              <input type="file" class="form-control" name="foto" accept="image/*">
            </div>
            <button type="submit" class="btn btn-success">Salvar Alterações</button>
          </form>
        </div>
      </div>
    </main>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
