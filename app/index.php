<?php 
    require_once 'util/conexao.php';
    session_start();
   ?>


<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Admirson Pires">
    <meta name="description" content="gestao pessoal da FNCV">
    <link rel="icon" href="image/Icone_FNCV.ico">
    <title>FNCV - Area de login</title>
    <a type="button" href="info.php" class="buttongps"><img src="image/icon_info.png" width="50" style="line-height:100px;"></a><a type="button" href="info.php" class="buttonMenu"><h5>Para mais informações click aqui!</h5></a>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/presentational-only.css">
    <link rel="stylesheet" href="css/font-awesome.min.css" >
    <link rel="stylesheet" href="responsive-full-background-image.css">
    
   
    <script src="js/jquery.min.js"></script>
    <!--<script src="js/presentational-only.js"></script>-->
    <script type="text/javascript">
      $(document).ready(function()
      {
        $('#load-more-content').click(function()
        {
          
          $('#more-content').toggleClass('shown');

          $('#load-more-content').hide();
          $('#paragrafoSeguinte').hide();
          $('#msgLogin').hide();

          if( $('#more-content').hasClass('shown') )
          {
            $('#load-more-content').text('Voltar');
            $('#more-content').fadeIn('slow', function()
            {
              $('#load-more-content').fadeIn('slow');
            });
          }
          else
          {
            
            $('#load-more-content').text('faça o login');
            $('#more-content').fadeOut('slow', function()
            {
              $('#load-more-content').fadeIn('slow');
            });

          }
        });
      });


    </script>

  </head>
  <body>

  
    <header class="container">
      <section class="content">
          <h1><img src="imagens/logofz.png" width="200" style="line-height:100px;"></h1>
          <div class="col-md-6 col-md-offset-3 front_logi"n>
            <h2>FUZILEIROS NAVAIS DE CABO VERDE</h2>
          </div>
          <br /><br />
          
          <p class="sub-title" style="padding-top: 40px;"><strong>Gestão de Pessoal </strong> <br /> Dos Fuzileiros navais de Cabo Verde</p>
          
          <h3 class=" text text-center text-danger mensagem_erro" id="msgLogin">
                                     <?php 
                                       if (isset($_SESSION['loginError'])) {
                                       
                                         echo $_SESSION['loginError']; 
                                         unset ($_SESSION['loginError']);
                                       
                                       }
                                       ?>
                                 </h3>
       
          <p><a class="button" id="load-more-content" href="#top">Faça o seu Login</a></p>
          <p id="paragrafoSeguinte">Para ter acesso as Aplicações</p>
          
          
          <div id="more-content">
            <div class="col-md-4 col-md-offset-4">
            
                <form role="form" action="validar_login.php" method="post">
                           <div class="form-group">
                              <div class="input">
                                 <input type="text" class="form-control" name="usuario" placeholder="introduzir nome usuario" required autofocus>
                                 <p></p>
                                 <input type="password" class="form-control" name="senha" placeholder="introduzir senha" required>
                                 <p></p>
                                 <input class="btn btn-info btn-block" type="submit" value="Entrar"> 
                                 <br />
                                 
                                 <!--<span class="input-group-btn">
                                    <a class="btn btn-success" type="submit">Go</a>
                                    </span>-->
                              </div>
                           </div>
                        </form>
            </div>    

          </div>
          <div style=" height: 200px;"></div>
       </section>
    </header>
  </body> 
  <footer class="footer">
     <div class="container">
        <div class="row text-center">
          
            <p class="text-muted " style=" color: yellow;">Criado por Admirson Pires 01 FZ &nbsp;
            <a href="http://www.twitter.com"><i class="fa fa-twitter-square" style="color: #d9edf7;"></i></a>
            <a href="http://www.facebook.com"><i class="fa fa-facebook-square" style="color: #d9edf7;" ></i></a>
            <a href="https://plus.google.com"><i class="fa fa-google-plus-square" style="color: red;"></i></a></p>
       
          
        </div>          
  </footer>     
</html>
<style type="text/css">

.front_login {
  background-color:rgb(66,138,202) ;
  
  border-radius: 5px;
  border: solid 4px #e2d924;
  padding: 5px;
  padding-top: none;
  margin-top: 8px;
  

}
.mensagem_erro {
  background-color:white;
  width: 50%;
  margin-left: 25%;
  margin-bottom: 30px;

  

}

body {

  height: 90%;
}

</style>






