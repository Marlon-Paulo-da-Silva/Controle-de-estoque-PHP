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
  <script src=""></script>
</head>

<body>

    <!-- Navbar -->
    <?php include_once("./templates/header.php"); ?>

    <br/><br/>

    <div class="container">
       <div class="row">
         <div class="col-md-4">
         <div class="card mx-auto" style="width: 18rem;">
            <img class="card-img-top mx-auto" style="width:60%;" src="./images/userid.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Perfil</h5>
              <p class="card-text"><i class="fa fa-user">&nbsp;</i>Marlon Paulo</p>
              <p class="card-text"><i class="fa fa-user">&nbsp;</i>Admin</p>
              <p class="card-text">Ultimo login: xx:xx xx/xx/xx</p>
              <a href="#" class="btn btn-primary"><i class="fa fa-edit">&nbsp;</i>Editar Perfil</a>
            </div>
          </div>
         </div>
         <div class="col-md-8">
           <div class="jumbotron" style="width: 100%;height: 100%;">
            <h1>Bem vindo Admin</h1>
            <div class="row">
              <div class="col-sm-6">
                <table>
                <tr><td style="text-align: center;"><canvas id="canvas_tt6232204b67114" width="175" height="175"></canvas></td></tr>
                <tr><td style="text-align: center; font-weight: bold"><a href="//24timezones.com/Rio-de-Janeiro/horas" style="text-decoration: none" class="clock24" id="tz24-1647452235-c1213-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IjAwOTlGRiIsImxhbmciOiJwdCIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NjIzMjIwNGI2NzExNCJ9" title="Rio de Janeiro hora atual" target="_blank" rel="nofollow">Hora local em Rio de Janeiro</a></td></tr>
                </table>
                <script type="text/javascript" src="//w.24timezones.com/l.js" async></script>
              </div>
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Novos Pedidos</h5>
                    <p class="card-text">Aqui você consegue criar pedidos e notas fiscais</p>
                    <a href="#" class="btn btn-primary">Novo pedido</a>
                  </div>
                </div>
            </div>
          </div>
         </div>
       </div>
    </div>
    <p></p>
    <p></p>
    
      <div class="row" style="">
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Gerenciar categorias</h5>
              <p class="card-text">Aqui você consegue gerenciar categorias e sub-categorias</p>
              <a href="#" class="btn btn-primary">Adicionar</a>
              <a href="#" class="btn btn-primary">Gerenciar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Marcas</h5>
              <p class="card-text">Aqui você consegue gerenciar as marcas</p>
              <a href="#" class="btn btn-primary">Adicionar</a>
              <a href="#" class="btn btn-primary">Gerenciar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
        <div class="card">
            <div class="card-body" >
              <h5 class="card-title">Produtos</h5>
              <p class="card-text">Aqui você consegue gerenciar os produtos</p>
              <a href="#" class="btn btn-primary">Adicionar</a>
              <a href="#" class="btn btn-primary">Gerenciar</a>
            </div>
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