<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Histórico de Agendamentos - Raízes da Saúde</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/historico.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">  
</head>
<body>
  <div class="container">
    <h1>Histórico de Agendamentos</h1>

    

    <div id="agendamentos-container"></div> 



    <div id="sem-agendamentos" style="display: none;">
      <p id="paragrafo">Nenhum agendamento encontrado.</p>

    <div class="text-center mt-6">
    <a href="sistema.php" class="btn btn-success">Voltar para Agendamento</a>
</div>
    </div>
  </div>

  <script src="js/historico.js"></script>
</body>
</html>
