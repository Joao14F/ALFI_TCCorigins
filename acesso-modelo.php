<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="CSS/bootstrap.min.css">
   <title>Acesso</title>
   <style>
      body {
         background-color: #D9D7EF;
         font-family: Arial, sans-serif;
      }

      form {
         display: flex;
         align-items: center;
      }
      input[type="text"] {
         border: none;
         border-bottom: 2px solid #ccc;
         font-size: 16px;
         padding: 5px;
         margin: 10px 10px;
         width: 200px;
         border-radius: 5px;
      }

      button[type="submit"] {
         background-color: #008CBA;
         color: white;
         border: none;
         padding: 5px 5px;
         font-size: 16px;
         border-radius: 4px;
         cursor: pointer;
      }

      button[type="submit"]:hover {
         background-color: #007A8C;
      }

      .logo {
         float: right;
         background-color: #1f252f;
         color: #fff;
         margin: -50px 30px 2px 5px;
      }

      .login {
         border: none;
         background-color: #2b5d8f;
         color: #fff;
         font-size: 16px;
         cursor: pointer;
         border-radius: 3px;
         margin: 2px;
      }

      .cadastro {
         border: none;
         background-color: #0ead78;
         color: #fff;
         font-size: 16px;
         cursor: pointer;
         border-radius: 3px;
         margin: 2x;
      }

      .botões {
         float: right;
         margin: -40px 2px 2px 2px;
      }

      .menu {
         background-color: #57449a;
         color: white;
         float: left;
         border-radius: 8px;
         width: 20%;
         padding: 10px 0px;
         margin: 5px 0px;
      }

      .menu ul {
         list-style: none;
         transition: none;
      }

      .menu ul :hover {
         width: 200%;
      }

      .menu li {
         transition: 0s;
      }

      .menu li :hover {
         font-size: 18px;
      }

      .menu a {
         color: white;
         font-style: none;
         text-decoration: none;
         font-size: 16px;
         transition: 2s;
      }

      .modelo {
         background-color: #ffffff;
         padding: 200px 0px 200px 0px;
         margin: 5px 200px 0px 300px;
         border-radius: 20px;
         text-align: center;
         align-items: center;
      }

      .comentario {
         background-color: #e8f1f9;
         margin: 30px 200px 30px 300px;
         padding: 25px 0px 25px 0px;
         border-radius: 10px;
         text-align: center;
         align-items: center;
      }

      footer {
         background-color: #1f252f;
         padding: 8px;
         text-align: left;
      }

      footer p {
         margin: 10px;
         color: #e8f1f9;
      }
   </style>
</head>

<body>
   <header>
      <form method="get" action="#">
         <input type="text" placeholder="Digite sua pesquisa aqui">
         <button type="submit">Pesquisar</button>
      </form>
      <a href="index.php"><img class="logo" src="48_Sem_Título__1_-removebg-preview.png" width="5%"></a>
      <div class="botões">
      <a href="login.php"><button class="login">Login</button></a>
      <a href="cadastro.php"><button class="cadastro">Cadastro</button></a>
      </div>
   </header>
   <div class="col-sm-2 col-md-11">
      <nav class="menu">
         <ul>
            <li><a href="#">Sustentaveis</a></li>
            <hr>
            <li><a href="#">Saias</a></li>
            <hr>
            <li><a href="#">Meias</a></li>
            <hr>
            <li><a href="#">Camisas</a></li>
            <hr>
            <li><a href="#">Calças</a></li>
            <hr>
            <li><a href="#">Bermudas</a></li>
            <hr>
            <li><a href="#">Página inicial</a></li>
            <hr>
            <li><a href="#">Sobre</a></li>
            <hr>
            <li><a href="#">Contato</a></li>
            <hr>
            <li><a href="#">Ajuda</a></li>

         </ul>
      </nav>
   </div>
   <section class="modelo">
      <h2>Bem-vindo ao ALFI</h2>
      <p>Este é o ALFI.</p>
   </section>
   <section class="comentario">
      <h2>comentários</h2>
   </section>
   <footer>
      <p>Copyright © 2023</p>
      <p>E-mails para contato: stefanymr208@gmail.com e jfranciscobratti@gmail.com</p>
   </footer>
</body>

</html>