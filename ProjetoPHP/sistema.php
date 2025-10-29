<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGENDAMENTO - Raízes da Saúde</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/sistema.css"> <!-- Link para o arquivo CSS externo -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<section>
<body>
<section class="darkMode">
  <header>
  <nav class="navbar navbar-expand-lg navbar-light bg-transparent w-100 px-4">
    <h2 class="logo me-3">Raízes da Saúde</h2>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="home.php">Página Inicial</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contato.php">Contato</a>
        </li>
      </ul>

      <div class="d-flex align-items-center gap-3">
        <button id="agendamento">Ver Agendamentos</button>
        <div class="trilho" id="trilho">
          <div class="indicador"></div>
        </div>
      </div>
    </div>
  </nav>
</header>

    <!-- Banner com Carrossel -->
<section class="banner">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
  
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="5000">
          <img src="img/img1.jpg" class="d-block w-100" alt="Imagem 1">
          <div class="carousel-caption d-none d-md-block">
            <h5>Oftalmo</h5>
            <p>Agende já sua consulta com nosso melhor oftalmo.</p>
          </div>
        </div>
  
        <div class="carousel-item" data-bs-interval="5000">
          <img src="img/img2.jpg" class="d-block w-100" alt="Imagem 2">
          <div class="carousel-caption d-none d-md-block">
            <h5>Ultrassonografias</h5>
            <p>Agente já sua ultrassom pelos melhores preços    </p>
          </div>
        </div>
  
        <div class="carousel-item" data-bs-interval="5000">
          <img src="img/img3.jpg" class="d-block w-100" alt="Imagem 3">
          <div class="carousel-caption d-none d-md-block">
            <h5>Análises Clinicas</h5>
            <p>Com seu pedido médico passe na nossa recepção para saber os preços do exames de Análise.</p>
          </div>
        </div>
      </div>
  
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
  
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
      </button>
    </div>
  </section>

  <!------------------LETRAS-------------------------->

  <div class="controle-fonte">
    <button onclick="changeFontSize(2)">A+</button>
    <button onclick="changeFontSize(-2)">A-</button>
  </div>
<!--------------------------------------------------------> 

            <!-- Card de médico (outro exemplo) -->
            <section class="medicos-container">
                <div class="medico-card">
                  <img src="img/cardiologista.jpg" alt="Médico 1">
                  <h3>Dr. João Silva</h3>
                  <p>Cardiologista</p>
                </div>
                <div class="medico-card">
                  <img src="img/dermatologista.jpg" alt="Médico 2">
                  <h3>Dra. Maria Souza</h3>
                  <p>Dermatologista</p>
                </div>
                <div class="medico-card">
                  <img src="img/ortopedista.jpg" alt="Médico 3">
                  <h3>Dr. Weslley Lima</h3>
                  <p>Ortopedista</p>
                </div>
                <div class="medico-card">
                  <img src="img/pediatra.jpg" alt="Médico 4">
                  <h3>Dr. Yumi Tanaka</h3>
                  <p>Pediatra</p>
                </div>
                <!-- Adicione mais cards conforme necessário -->
              </section>
 <section class="agendamento">
  <h2>AGENDE SUA CONSULTA</h2>
  <form id="form-agendamento"> 
        <div class="form-group">
          <label for="nome">Nome Completo:</label>
          <input type="text" id="idnome" name="nome" required />        
        </div>

        <div class="form-group">
          <label for="cpf">CPF:</label>
          <input type="text" id="idcpf" name="idcpf" placeholder="123.456.789-10" required/>
        </div>

        <div class="form-group">
          <label for="telefone">Telefone:</label>
          <input type="tel" id="idtelefone" name="telefone" required placeholder="(00) 00000-0000"/>
        </div>

        <div class="form-group">
          <label for="email">E-mail:</label>
          <input type="email" id="idemail" name="email" required placeholder="exemplo@dominio.com"/>
        </div>

        <div class="form-group">
          <label for="data-nascimento">Data de Nascimento:</label>
          <input type="text" id="iddataNascimento" name="dataNascimento" placeholder="dd/mm/aaaa" maxlength="10" required/>
        </div>
        <div id="mensagensErro"></div>

        <div class="form-group">
          <label for="especialidade">Especialidade:</label>
          <select id="especialidade" name="especialidade" required>
            <option disabled selected value="">Selecione</option>
            <option value="Ginecologia">Ginecologia</option>
            <option value="Pediatria">Pediatria</option>
            <option value="Cardiologia">Cardiologia</option>
            <option value="Dermatologia">Dermatologia</option>
          </select>
        </div>

        <div class="form-group">
          <label for="medico">Médico:</label>
          <select id="medico" name="medico" required>
            <option value="">Selecione a especialidade primeiro</option>
          </select>
        </div>

        <div class="form-group">
        <label for="data-consulta">Data da Consulta:</label>
        <select id="data-consulta" name="data-consulta" required>
        <option value="">Selecione o médico primeiro</option>
  </select>
</div>


    <div class="form-group">
  <label for="horario">Horário:</label>
  <select id="horario" name="horario" required>
    <option value="">Selecione o médico primeiro</option>
  </select>
</div>


    <button type="submit" id="confirmarAgendamento">Confirmar Agendamento</button>
  </form>
</section>



<footer class="footer">
  <p>&copy; 2025 Raízes da Saúde. Todos os direitos reservados.</p>
</footer>


    <!-- Scripts do Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  

  <script>
    // Quando a página carregar...
    document.addEventListener("DOMContentLoaded", function () {
      // Seleciona o botão pelo ID
      const botao = document.getElementById("agendamento");

      // Adiciona o evento de clique
      botao.addEventListener("click", function () {
        // Redireciona para a outra página
        window.location.href = "historico.php";
      });
    });
  </script>
</body>
</section>
<script src="js/sistema.js"></script>
</html>