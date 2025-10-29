<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/sobrenos.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Sobre Nós - Raízes da Saúde</title>
<style>
  body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-image: url('img/fundo.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: justify;  
  } 
  
</style>
  
</head>
<body>
  <!-- NAVBAR -->
<header class="navbar navbar-expand-lg navbar-light" style="background-color: transparent; padding: 20px 30px;">
  <div class="container-fluid">

    <!-- Logo -->

      <h2 class="logo navbar-brand mb-0">Raízes da Saúde</h2>

   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" 
      aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu colapsável -->
    <div class="collapse navbar-collapse" id="navbarContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-tabs">

        <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="especialidadesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Especialidades
          </a>
          <ul class="dropdown-menu" aria-labelledby="especialidadesDropdown">
            <li><a class="dropdown-item" href="quemsomos.php">Genicologista e Obstetrícia</a></li>
            <li><a class="dropdown-item" href="quemsomos.php">Pediatria</a></li>
            <li><a class="dropdown-item" href="quemsomos.php">Cardiologista</a></li>
            <li><a class="dropdown-item" href="quemsomos.php">Ortopedista</a></li>
            <li><a class="dropdown-item" href="quemsomos.php">Dermatologista</a></li>
            <li><a class="dropdown-item" href="quemsomos.php">Psiquiatria</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="cadastro.php">Agende sua consulta</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="examesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Exames
          </a>
          <ul class="dropdown-menu" aria-labelledby="examesDropdown">
            <li><a class="dropdown-item" href="quemsomos.php">Hemograma completo</a></li>
            <li><a class="dropdown-item" href="quemsomos.php">Ultrassom</a></li>
            <li><a class="dropdown-item" href="quemsomos.php">Tomografia</a></li>
            <li><a class="dropdown-item" href="quemsomos.php">Eletrocardiograma</a></li>
            <li><a class="dropdown-item" href="quemsomos.php">Raio-x</a></li>
            <li><a class="dropdown-item" href="quemsomos.php">Mapa</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="cadastro.php">Agende sua consulta</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="quemsomos.php">Quem somos</a>
        </li>
      </ul>

      <!-- Botão cadastro alinhado à direita -->
      <button id="cadastro" class="btn btn-success ms-lg-3 mt-3 mt-lg-0">Cadastre-se</button>
    </div>
  </div>
</header>

  <!-- CONTEÚDO -->
  <div class="sobre-nos">
    <div class="texto">
      <div class="caixa-transparente">
       <h1>Sobre nós</h1>
        <p>Somos um grupo de estudantes apaixonados por tecnologia, unidos para desenvolver o projeto "Raízes da Saúde". Nosso objetivo foi criar uma solução simples, funcional e acessível, que pudesse refletir cuidado, organização e propósito.</p>
        <p>O trabalho foi dividido entre os integrantes para garantir eficiência e colaboração:</p>
        <ul>
          <li><strong>Maria Julia:</strong> Responsável pelo desenvolvimento das telas: "Home", "Sistema", “Quem Somos” e "Contato e Agendamento". </li>
          <li><strong>Paulo</strong> Responsável pela elaboração da tela “Sobre Nós". </li>
          <li><strong>Pedro:</strong>  Responsável pelo desenvolvimento da tela de cadastro e suas funcionalidades, também auxiliou na tela de login.</li>
          <li><strong>Miguel:</strong> Responsável pelo desenvolvimento da tela login e suas funcionalidades.</li>
          <li><strong>Matheus e Rafael:</strong> Responsáveis pela criação e gerenciamento dos desafios, garantindo a adequação e funcionalidade para os usuários. </li>
          <li><strong>Julia:</strong> Responsável pela elaboração da documentação técnica, organizando as informações e especificações do projeto de forma clara e estruturada.</li>
</li>
        </ul>
        <p>Este projeto é resultado do nosso comprometimento, aprendizado e vontade de entregar algo útil e bem-feito. Agradecemos a todos que acompanharam e contribuíram com o desenvolvimento da "Raízes da Saúde".</p>

      </div>
    </div>

    <div class="imagens">
      <img src="img/maju.jpg" alt="Maria Julia">
      <img src="img/paulo.jpg" alt="Paulo">
      <img src="img/pedro.jpg" alt="Pedro">
      <img src="img/miguel.jpg" alt="Miguel">
      <img src="img/rafael.jpg" alt="Rafael">
      <img src= "img/julia.jpg" alt="Julia">
      <img src="img/matheus.jpg" alt="Matheus">
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>

   <script>
    // Quando a página carregar...
    document.addEventListener("DOMContentLoaded", function () {
      // Seleciona o botão pelo ID
      const botao = document.getElementById("cadastro");

      // Adiciona o evento de clique
      botao.addEventListener("click", function () {
        // Redireciona para a outra página
        window.location.href = "cadastro.php";
      });
    });
  </script>
</body>
</html>