<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="CSS/bootstrap.min.css">
   <title>Cadastro</title>
   <style>
      body {
         background-color: #D9D7EF;
      }

      form {
         position: fixed;
         top: 20px;
         left: 20px;
         right: 20px;
         background-color: #57449a54;
         padding: 5px;
         border-radius: 10px;
      }

      .form-group {
         margin: 10px 0px;

      }

      button {
         margin-left: 4px;
      }
   </style>
</head>

<body>
   <form action="conexao.php" method="POST">
      <div class="container-fluid">
         <div class="row">
            <p class="col-sm-0 col-md-1"></p>
            <div class="col-sm-12 col-md-10">
               <div class="form-group">
                  <label for="InputEmail1">Insira o E-mail</label>
                  <input type="email" class="form-control" id="InputEmail1" placeholder="E-mail">
               </div>
            </div>
         </div>
         <div class="row">
            <p class="col-sm-0 col-md-1"></p>
            <div class="col-sm-12 col-md-10">
               <div class="form-group">
                  <label for="InputPassword1">Insira a senha</label>
                  <input type="password" class="form-control" id="Password1" placeholder="Senha">
               </div>
            </div>
         </div>
         <div class="row gx-0 gy-1">
            <p class="col-1 col-sm-3 col-md-1"></p>
            <button type="submit" value="Enviar" class="col-sm-6 col-md-1 btn btn-primary">Entrar</button>
         </div>
      </div>
   </form>
</body>

</html>