<?php
    include("conexao.php");

    $nome = $_POST['nome'];
    $valor = $_POST['valor'];
    $descricao = $_POST['descricao'];
    $quantidade = $_POST['quantidade'];
    $id_categoria = $_POST['id_categoria'];

    $sql = "INSERT INTO produto (nome,valor, descricao, quantidade, id_categoria) 
    VALUES('$nome','$valor', '$descricao', '$quantidade', '$id_categoria')";

if(mysqli_query($conexao, $sql)){
echo "Produto cadastrado com sucessso";
}
else{
echo "Erro".mysqli_connect_error($conexao);
}
mysqli_close($conexao);
?>