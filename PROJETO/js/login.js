document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    const emailInput = document.getElementById("idEmail");
    const senhaInput = document.getElementById("idSenha");
    const mensagensErro = document.getElementById("mensagensErro");
    
    //exibição de senha
    function exibirSenha (){

    var inputExibir = document.getElementById('idSenha');
    var btnShowExibir = document.getElementById('btn-exibirSenha');
    
    if(inputExibir.type === 'password'){
      inputExibir.setAttribute ('type', 'text')
      btnShowExibir.classList.replace('bi-eye-fill', 'bi-eye-slash-fill');
    }
    else{
      inputExibir.setAttribute ('type', 'password')
      btnShowExibir.classList.replace('bi-eye-slash-fill', 'bi-eye-fill');
    }

  };
    var btnShowExibir = document.getElementById ('btn-exibirSenha');
    btnShowExibir.addEventListener('click', exibirSenha);

    form.addEventListener("submit", function (e) {
      e.preventDefault(); 
  
      const email = emailInput.value.trim();
      const senha = senhaInput.value.trim();
  
      
      mensagensErro.classList.add("d-none");
      mensagensErro.innerHTML = "";
  
      let erros = [];
  
      
      if (!email || !email.includes("@") || !email.includes(".")) {
        erros.push("Digite um e-mail vÃ¡lido.");
      }
  
      
      if (!senha || senha.length < 6) {
        erros.push("A senha deve conter pelo menos 6 caracteres.");
      }
  
      if (erros.length > 0) {
        mensagensErro.innerHTML = erros.join("<br>");
        mensagensErro.classList.remove("d-none");
      } else {

        form.submit();
        window.location.href = "sistema.html"
      }
    });
  });