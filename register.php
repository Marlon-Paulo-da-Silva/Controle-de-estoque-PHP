<!DOCTYPE HTML>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sistema para controle de estoque</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  
  <script type="text/javascript" src="./js/main.js"></script>
</head>

<body>

    <!-- Navbar -->
    <?php include_once("./templates/header.php"); ?>

    <br/><br/>

    

    <div class="container">
    <div class="card mx-auto" style="width: 30rem;">
        <div class="card-header">
          Registrar
        </div>
        <div class="card-body">
          <form id="register_form" onsubmit="return false" autocomplete="off">
          <div class="form-group">
            <label for="exampleInputEmail1">Nome completo</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu nome">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">E-mail</label>
            <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Digite seu e-mail">
          </div>

          <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" class="form-control" id="password" placeholder="Digita sua senha">
          </div>
          
          <div class="form-group">
            <label for="password2">Confirmação de Senha</label>
            <input type="password" class="form-control" id="password2" placeholder="Digita sua senha novamente">
          </div>
          
                
          <div class="form-group">
            <label for="userType">Tipo de usuário</label>
            <select name="usertype" class="form-control" id="usertype">
              <option value="1">Administrador</option>
              <option value="0">Outro</option>
            </select>
          </div>
                   
          <button type="submit" name="user_register" class="btn btn-primary"><span class="fa fa-user"></span>&nbsp;Registrar</button>
          <span><a href="index.php">Entrar</a></span>
        </form>
        </div>
        <div class="card-footer text-muted">
        </div>
      </div>
     
    </div>

    

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
</body>

</html>