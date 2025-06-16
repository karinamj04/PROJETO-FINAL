const medicosPorEspecialidade = {
  "Ginecologia": ["Dra. Juliana", "Dr. João", "Dra. Patrícia"],
  "Pediatria": ["Dra. Maristela", "Dr. Yumi Tanaka"],
  "Cardiologia": ["Dr. Ricardo", "Dra. Camila"],
  "Dermatologia": ["Dr. Lucas", "Dra. Aline"],
  "Ortopedista": ["Dr. Magnato", "Dr. Inácio"],
  "Psiquiatria": ["Dra. Luiza", "Dra. Alice"]
};

const horariosPorMedico = {
  "Dra. Juliana": ["08:00", "09:00", "10:00", "11:00"],
  "Dr. João": ["16:00", "17:00", "18:00", "18:00"],
  "Dra. Patrícia": ["12:00", "13:00", "14:00", "15:00"],
  "Dra. Maristela": ["09:30", "11:30"],
  "Dr. Yumi Tanaka": ["07:00", "07:50"],
  "Dr. Ricardo": ["07:30", "08:30"],
  "Dra. Camila": ["14:00", "15:30"],
  "Dr. Lucas": ["13:00", "14:30"],
  "Dra. Aline": ["08:00", "10:30", "12:30"],
  "Dr. Magnato": ["09:00", "10:30"],
  "Dr. Inácio": ["09:00","10:00", "11:00"],
  "Dra. Luiza": ["13:30", "14:30", "15:30", "16:30"],
  "Dra. Alice": ["09:30", "10:30", "11:30", "12:30"]
};

const diasAtendimentoPorMedico = {
  "Dra. Juliana": [2, 3, 4],
  "Dr. João": [1, 5, 6],
  "Dra. Patrícia": [2, 3, 4],
  "Dra. Maristela": [2, 4, 6],
  "Dr. Yumi Tanaka": [1, 2, 3, 4, 5],
  "Dr. Ricardo": [1, 2, 3, 4, 5],
  "Dra. Camila": [1, 3, 5],
  "Dr. Lucas": [1, 2, 3, 4, 5, 6],
  "Dra. Aline": [1, 2, 3, 4, 5],
  "Dr. Magnato": [2, 3, 4],
  "Dr. Inácio": [1, 5, 6],
  "Dra. Luiza": [1, 2, 3, 4, 5],
  "Dra. Alice": [1, 2, 3, 4, 5],
};

const selectEspecialidade = document.getElementById("especialidade");
const selectMedico = document.getElementById("medico");
const selectHorario = document.getElementById("horario");
const selectDataConsulta = document.getElementById("data-consulta");

function gerarDatasValidas(diasPermitidos, quantidade = 30) {
  const datas = [];
  let data = new Date();
  while (datas.length < quantidade) {
    if (diasPermitidos.includes(data.getDay())) {
      datas.push({
        value: data.toISOString().slice(0, 10),
        text: data.toLocaleDateString('pt-BR')
      });
    }
    data.setDate(data.getDate() + 1);
  }
  return datas;
}

selectEspecialidade.addEventListener("change", () => {
  const medicos = medicosPorEspecialidade[selectEspecialidade.value] || [];
  selectMedico.innerHTML = '<option value="">Selecione o médico</option>';
  selectHorario.innerHTML = '<option value="">Selecione o médico primeiro</option>';
  selectDataConsulta.innerHTML = '<option value="">Selecione o médico primeiro</option>';

  medicos.forEach(medico => {
    selectMedico.appendChild(new Option(medico, medico));
  });
});

selectMedico.addEventListener("change", () => {
  const medico = selectMedico.value;
  const horarios = horariosPorMedico[medico] || [];
  const diasPermitidos = diasAtendimentoPorMedico[medico] || [];

  selectHorario.innerHTML = '<option value="">Selecione</option>';
  selectDataConsulta.innerHTML = '<option value="">Selecione a data</option>';

  horarios.forEach(horario => {
    selectHorario.appendChild(new Option(horario, horario));
  });

  gerarDatasValidas(diasPermitidos).forEach(({ value, text }) => {
    selectDataConsulta.appendChild(new Option(text, value));
  });
});
//TELA DARK
    let trilho = document.getElementById('trilho')
    let body = document.querySelector('body')

      trilho.addEventListener('click', ()=>{
      trilho.classList.toggle('dark')
      body.classList.toggle('dark')
});
// Máscaras simples para CPF, telefone e data de nascimento
function aplicarMascara(input, regex, formato) {
  input.addEventListener('input', e => {
    let val = e.target.value.replace(/\D/g, '');
    e.target.value = val.replace(regex, formato);
  });
}

aplicarMascara(document.getElementById('idcpf'),
  /(\d{3})(\d{3})(\d{3})(\d{2})/,
  '$1.$2.$3-$4');

aplicarMascara(document.getElementById('idtelefone'),
  /^(\d{2})(\d{5})(\d{4})$/,
  '($1) $2-$3');

aplicarMascara(document.getElementById('iddataNascimento'),
  /^(\d{2})(\d{2})(\d{4})$/,
  '$1/$2/$3');

// Validação do formulário
function validarFormulario(event) {
  event.preventDefault();
  const nome = document.getElementById('idnome').value.trim();
  const cpf = document.getElementById('idcpf').value;
  const telefone = document.getElementById('idtelefone').value;
  const email = document.getElementById('idemail').value;
  const nascimento = document.getElementById('iddataNascimento').value;
  const mensagemErro = document.getElementById('mensagensErro');
  mensagemErro.textContent = "";
  mensagemErro.style.color = "red";

  if (nome.length < 3) {
    mensagemErro.textContent = "Nome deve ter pelo menos 3 caracteres.";
    return;
  }
  if (!/^\d{3}\.\d{3}\.\d{3}-\d{2}$/.test(cpf)) {
    mensagemErro.textContent = "CPF inválido. Use o formato 123.456.789-10.";
    return;
  }
  if (!/^\(\d{2}\) \d{5}-\d{4}$/.test(telefone)) {
    mensagemErro.textContent = "Telefone inválido. Use o formato (00) 00000-0000.";
    return;
  }
  if (!/\S+@\S+\.\S+/.test(email)) {
    mensagemErro.textContent = "E-mail inválido.";
    return;
  }
  if (!/^\d{2}\/\d{2}\/\d{4}$/.test(nascimento)) {
    mensagemErro.textContent = "Data inválida. Use o formato dd/mm/aaaa.";
    return;
  }
  
  // Se tudo ok, salva os dados e o agendamento
  const form = document.getElementById("form-agendamento");
  const dadosConsulta = {
    nome: document.getElementById("idnome").value,
    cpf: document.getElementById("idcpf").value,
    telefone: document.getElementById("idtelefone").value,
    email: document.getElementById("idemail").value,
    nascimento: document.getElementById("iddataNascimento").value,
    especialidade: selectEspecialidade.value,
    medico: selectMedico.value,
    horario: selectHorario.value,
    data: selectDataConsulta.value
  };

  let agendamentos = JSON.parse(localStorage.getItem("agendamentos")) || [];
  agendamentos.push(dadosConsulta);
  localStorage.setItem("agendamentos", JSON.stringify(agendamentos));

  alert("Consulta marcada com sucesso!");
  form.reset();
  mensagemErro.textContent = "";
}

document.getElementById('confirmarAgendamento').addEventListener('click', validarFormulario);