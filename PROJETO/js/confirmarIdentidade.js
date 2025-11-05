document.getElementById("formCpf").addEventListener("submit", async function (e) {
  e.preventDefault();
  const cpf = document.getElementById("cpf").value;
  const mensagem = document.getElementById("mensagem");

  try {
    const formData = new FormData();
    formData.append("cpf", cpf);

    const resposta = await fetch("../PROJETO.php/verificar_cpf.php", {
      method: "POST",
      body: formData
    });

    const dados = await resposta.json();

    if (!dados.ok) {
      mensagem.textContent = dados.mensagem || "Erro na verificação.";
      mensagem.style.color = "red";
      return;
    }

    if (dados.existe) {
      mensagem.textContent = "✅ CPF encontrado! Redirecionando...";
      mensagem.style.color = "lightgreen";

      setTimeout(() => {
        window.location.href = "alterarsenha.html";
      }, 1500);

    } else {
      mensagem.textContent = "❌ CPF não encontrado no sistema.";
      mensagem.style.color = "red";
    }
  } catch (erro) {
    mensagem.textContent = "Erro na conexão com o servidor.";
    mensagem.style.color = "red";
  }
});


// --- Máscara de CPF ---
const cpfInput = document.getElementById("cpf");
cpfInput.addEventListener("input", function (e) {
  let value = e.target.value.replace(/\D/g, ""); // remove tudo que não é número
  if (value.length > 11) value = value.slice(0, 11); // limita a 11 dígitos

  // aplica a máscara
  value = value.replace(/(\d{3})(\d)/, "$1.$2");
  value = value.replace(/(\d{3})(\d)/, "$1.$2");
  value = value.replace(/(\d{3})(\d{1,2})$/, "$1-$2");

  e.target.value = value;
});


