document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById('form-alterar-senha');
  const feedback = document.getElementById('feedback');

  form.addEventListener('submit', (e) => {
    e.preventDefault();

    const novaSenha = document.getElementById('novaSenha').value.trim();
    const confirmarSenha = document.getElementById('confirmarSenha').value.trim();

    // Limpa mensagens anteriores
    feedback.textContent = "";

    if (novaSenha.length < 6) {
      feedback.textContent = "A senha deve ter pelo menos 6 caracteres.";
      feedback.classList.remove('text-success');
      feedback.classList.add('text-warning');
      return;
    }

    if (novaSenha !== confirmarSenha) {
      feedback.textContent = "As senhas não coincidem. Tente novamente.";
      feedback.classList.remove('text-success');
      feedback.classList.add('text-warning');
      return;
    }

    // Caso esteja tudo certo
    feedback.textContent = "Senha alterada com sucesso!";
    feedback.classList.remove('text-warning');
    feedback.classList.add('text-success');

    form.reset();
  });
});
