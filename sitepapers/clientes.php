<?php
 include("conexao.php");

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $CPFCliente = $_POST['CPFCliente'];
        $endereco = $_POST['endereco'];
        $numero = $_POST['numero'];
        $cep = $_POST['cep'];
        $complemento = $_POST['complemento'];

        $sql = "INSERT INTO usuarios(nome,email,telefone, CPFCliente, endereco, numero, cep, complemento) 
        VALUES('$nome','$email','$telefone','$CPFCliente', '$endereco', '$numero', '$cep', '$complemento')";
    
if(mysqli_query($conexao, $sql)){
    echo "Usuario cadastrado com sucesso";
}
else{
    echo "Erro".mysqli_connect_error($conexao);
}
    mysqli_close($conexao);
?>