<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    
<style>
  body {
  margin: 0;
  font-family: 'Nunito', sans-serif;
  background-image: url('img/fundo1.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: justify;  
}
</style>
    

    <title>HOME - Raízes da Saúde</title>
</head>
<body>

    <header>
      <!------------------------------NOSSA LOGO------------------------->
        <h2 class="logo">Raízes da Saúde</h2>

        <nav class="navigation">

          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Especialidades</a>
              <ul class="dropdown-menu">
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
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Exames</a>
              <ul class="dropdown-menu">
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
              <a class="nav-link" href="sobrenos.php">Sobre Nós</a>
            </li>

            </nav>

          <button id="cadastro">Cadastre-se</button>

          
    </header>


    <div class="texto-esquerda">
        <h1>Bem-vindo à Raízes da Saúde</h1>
        <p>Na Raízes da Saúde, cuidamos de cada paciente com carinho, responsabilidade e respeito.
Nossa missão é oferecer um cuidado humanizado e acessível, promovendo a saúde e o bem-estar de todos.
Com consultas a partir de R$90,00, nosso atendimento é simples, eficiente e realizado por profissionais qualificados.

Valorizamos a escuta, o acolhimento e a confiança, garantindo que cada pessoa se sinta segura e bem cuidada desde o primeiro contato
        </p>
       <a href="contato.php" class="btn-contato">Nosso Contato</a>
    
    </div>
    














    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

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