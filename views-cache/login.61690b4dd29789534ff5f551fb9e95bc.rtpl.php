<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/res/login/style.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="carlettoicon.png"  href="/res/login/carlettoicon.png">
    <link rel="stylesheet" href="/res/login/lib/css/bootstrap.min.css">
   </head>
   <body>
  <header>
    <div class="header-nocolor">
      <div class="container">
        
          <ul>
            <li class="inicio"><a href="https://www.grupocarletto.com.br/">Inicio</a></li>
            <li class="sobre"><a href="https://www.grupocarletto.com.br/?page_id=327">Sobre</a></li>
            <li class="sobre"><a href="https://www.grupocarletto.com.br/?page_id=455">Credenciadas</a></li>
            <li class="sobre"><a href="https://www.grupocarletto.com.br/?page_id=450">Blog</a></li>
            <li class="sobre"><a href="https://www.grupocarletto.com.br/">Contato</a></li>
            <li class="sobre"><a href="https://www.grupocarletto.com.br/?page_id=339">Area do Cliente</a></li>
            <!--<li class="dropdown"><span>CONTATO</span>
                <div class="dropdown-content">
                <a href="#">Orçamento/Cotação</a>
                <a href="#">Trabalhe conosco</a> 
              </div></li>-->
            <!--<li class="acesso"><img src="img/cadeado-fechado.png"><a href="#">AREA DO CLIENTE</a></li>-->

          </ul>
      </div>
    </div>  
  </header>
  <section>
    <div>
  <form action="/sistema/login" method="post">
    <div id="login">
      <img src="/res/login/img/logo login.png">
       <br><br>
        <h1>Sistema de Monitoramento</h1>
        <h2>Contratos Carletto</h2>
        <input type="text" placeholder="Nome de usuario" name="user">
        <br><br>
        <input type="password" placeholder="Insira a senha" name="password">
        <br><br>
        <button>Entrar</button>
        <br>
        <a href="#">Esqueceu a senha?</a>
        <h3 id="ass">Por Martinho Ramos</h3>
    </div>
  </form>
</div>
</section>
  <script>
      </script>
  <script src="/res/login/lib/js/bootstrap.min.js"></script>
  <script src="/res/login/lib/js/bootstrap.min.js"></script>

</body>

</html>