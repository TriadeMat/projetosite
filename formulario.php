<?php
if (isset ($_POST['nome'])){
    $nome = $_POST['nome'];
    $nome = $_POST['CPF'];
    $nome = $_POST['CEP'];
    $nome = $_POST['telefone'];
    $nome = $_POST['senha'];
    $nome = $_POST['email'];
    
 $banco = "mysql:dbname=bdcadastro;host=localhost";
 $user = "root";
 $pass = "";
 try {
     $pdo=new PDO($banco,$user,$pass);
     echo"<h1>Conectado";
 } catch (\Throwable $th) {
    echo"<h1>Erro ao conectar.Tente mais tarde";
 }

}


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href= "../projetosite/css/pag5.css">




</head>
<body>
   
   <header>
        <h1>  </h1>
        
    <a href="pag1.html" class="home-btn">
    <button class="home-btn">
  <img src="../Projeto02/img/lar.png" alt="Home" class="icon">
</button>
</a>
<a href="pag4.html" class="icon">
<button class="compra-btn">
    <img src="../Projeto02/img/carrinho-de-compras.png" alt="Compra" class="icon">

</button>
</a>
     
     <a href="pag2.html" class="btn1">Refeições</a>
     <a href="pag3.html" class="btn2">Sobremesas</a>
     <a href="pag5.html" class="btn-login">Login</a>   
    </header>
    
    <div class="contorno">
        <h1>Cadastro novo</h1>
        <form action=""  method = "post">
        <input type="text" placeholder="Nome Completo" name = "nome" ><p>
        <input type="text" placeholder="CPF" name = "CPF"><p>
        <input type="text" placeholder="CEP" name = "CEP"><p>
        <input type="text" placeholder="Telefone" name = "telefone"><p>
        <input type="text" placeholder="Senha" name = "senha"><p>
        <input type="text" placeholder="Email" name = "email"><p>
        <input type="submit" value ="Enviar">
     </div>


    </body>
</html>