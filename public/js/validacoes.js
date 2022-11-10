function validarForm() {
  let nome = document.getElementById("txtNome").value;
  let preco = document.getElementById("txtPreco").value;
  let unidade = document.getElementById("txtUnidade").value;
  let descricao = document.getElementById("txtDescricao").value;

  if (nome == "") {
      swal(
          "Ops!", 
          "O campo nome é obrigatório!", 
          "error"
      );
      return false;
  } else if (preco == "") {
      swal(
          "Ops!", 
          "O campo preço é obrigatório!", 
          "error"
      );
      return false;
  } else if (unidade == "") {
      swal(
          "Ops!", 
          "O campo unidade é obrigatório!", 
          "error"
      );
      return false;
  } else if (descricao == "") {
      swal(
          "Ops!", 
          "O campo descrição é obrigatório!", 
          "error"
      );
      return false;
  } 

  return true;
}