//Máscara de CPF
document.getElementById('cpf').addEventListener('input', function (e) {
  let value = e.target.value.replace(/\D/g, ''); // remove tudo que não é número
  value = value.replace(/(\d{3})(\d)/, '$1.$2'); // coloca o primeiro ponto
  value = value.replace(/(\d{3})(\d)/, '$1.$2'); // coloca o segundo ponto
  value = value.replace(/(\d{3})(\d{1,2})$/, '$1-$2'); // coloca o traço
  e.target.value = value;
});