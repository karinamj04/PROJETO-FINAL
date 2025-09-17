<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Raiz Saúde - Dashboard</title>
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
      <a href="configuracoes.php">Configurações</a>
    </nav>
  </div>

  <!-- Main -->
  <div class="flex-grow-1 d-flex flex-column">
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm px-4">
      <div class="ms-auto d-flex align-items-center">
        <span class="me-2 fw-semibold text-success">
          <!-- PHP traria o nome do admin -->
          <?php echo $adminNome ?? "Administrador"; ?>
        </span>
        <img src="uploads/admin.jpg" alt="Foto do administrador" class="rounded-circle profile-pic">
      </div>
    </nav>

    <!-- Conteúdo -->
    <main class="p-4 flex-grow-1">
      <!-- Cards -->
      <div class="row g-3 mb-4">
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card shadow-sm border-0">
            <div class="card-body">
              <h6 class="text-muted">Total Pacientes</h6>
              <h3 class="fw-bold text-success">690</h3>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card shadow-sm border-0">
            <div class="card-body">
              <h6 class="text-muted">Consultas Agendadas</h6>
              <h3 class="fw-bold text-success">120</h3>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card shadow-sm border-0">
            <div class="card-body">
              <h6 class="text-muted">Consultas Realizadas</h6>
              <h3 class="fw-bold text-success">540</h3>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card shadow-sm card-highlight">
            <div class="card-body">
              <h6>Taxa de Ocupação</h6>
              <h3 class="fw-bold">85%</h3>
            </div>
          </div>
        </div>
      </div>

      <!-- Formulário -->
      <div class="card shadow-sm border-0">
        <div class="card-body">
          <h5 class="card-title mb-4 text-success">Cadastro de Paciente</h5>
          <form>
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" placeholder="Digite o nome completo" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="Digite o email" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Telefone</label>
                <input type="tel" class="form-control" placeholder="Digite o telefone">
              </div>
              <div class="col-md-6">
                <label class="form-label">Convênio</label>
                <input type="text" class="form-control" placeholder="Digite o convênio (se houver)">
              </div>
            </div>
            <div class="mt-4">
              <button type="submit" class="btn btn-success w-100">Cadastrar</button>
            </div>
          </form>
        </div>
      </div>

   

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
