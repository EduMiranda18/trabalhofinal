const nome = document.querySelector("#nome");
const cpf = document.querySelector("#cpf");
const data = document.querySelector("#birthday");
const senha = document.querySelector("#senha");
const senha2 = document.querySelector("#repita");
const btn = document.querySelector(".btn-cadastrar");

const errorMessage = document.querySelector(".msg");

btn.addEventListener("click", (e) => {
  const nomeValor = nome.value;
  const cpfValor = cpf.value;
  const dataValor = data.value;
  const senhaValor = senha.value;
  const senha2Valor = senha2.value;

  if (
    nomeValor === "" ||
    cpfValor === "" ||
    dataValor === "" ||
    senhaValor === "" ||
    senha2Valor === ""
  ) {
    errorMessage.textContent = "Por faavor preencha todos os campos!";
    errorMessage.classList = "error";
    e.preventDefault();

    setTimeout(() => {
      errorMessage.textContent = "";
      errorMessage.classList = "";
    }, 3000);
    return;
  } else {
    if ((senhaValor != senha2Valor)) {
      errorMessage.textContent = "As senhas estão diferentes!";
      errorMessage.classList = "error";
      e.preventDefault();

      setTimeout(() => {
        errorMessage.textContent = "";
        errorMessage.classList = "";
      }, 3000);
      return;
    }
  }
});
