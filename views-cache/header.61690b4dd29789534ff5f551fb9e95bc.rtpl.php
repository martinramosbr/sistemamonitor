<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/res/sistema/style.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="carlettoicon.png"  href="/res/sistema/carlettoicon.png">
    <link rel="stylesheet" href="/res/sistema/lib/css/bootstrap.min.css">
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
          </ul>
      </div>
    </div>  
  </header>
    <div class="sidebar close">
    <div class="logo-details">
      <img src="/res/sistema/img/icone-logo-menu.png">
      <span class="logo_name"><img src="/res/sistema/img/1logo-login.png"></span>
    </div>
    <ul class="nav-links">
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Solicitações</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Solicitações</a></li>
          <li><a href="/sistema/in-queue">Na fila</a></li>
          <li><a href="/sistema/resolved">Atendidas</a></li>
          <!--<li><a href="formulario-cadastro-consultas.html">Consultas</a></li>-->
        </ul>
      </li>
      <!--<li>
        <div class="iocn-link">
        <a href="#">
          <i class='bx bx-pie-chart-alt-2' ></i>
          <span class="link_name">Empenho</span>
        </a>
        <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Empenho</a></li>
          <li><a href="tabela-saldos.html">Saldos</a></li>
          <li><a href="tabela-extratos.html">Extrato</a></li>
        </ul>
      </li>-->
      <!--<li>
        <div class="iocn-link">
        <a href="#">
          <i class='bx bx-line-chart' ></i>
          <span class="link_name">Painel</span>
        </a>
        <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Painel</a></li>
          <li><a href="monitor-avencer.html">A vencer</a></li>
          <li><a href="monitor-vencidos.html">Vencidos</a></li>
          <li><a href="todos-vencimentos.html">Todos</a></li>
        </ul>
      </li>-->
      <li>
        <div class="iocn-link">
        <a href="#">
          <i class='bx bx-cog' ></i>
          <span class="link_name">Suporte</span>
        </a>
         <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Suporte</a>
          </li>
          <li><a href="/sistema/users">Usuario</a></li>
          <li><a href="/sistema/alterar-users">Alterar Senha</a></li>
        </ul>
      </li>
  <li>
    <div class="profile-details">
      <div class="profile-content">
      </div>
      <div class="name-job">
        <div class="profile_name">value</div>
        <div class="job">Carletto Sitemas</div>
      </div>
      <a class="bx bx-log-out" style="color: #fff; height: 50px; min-width: 78px; text-align: center; line-height: 50px; font-size: 20px; cursor: pointer; transition: all 0.3s ease;" href="logout">Sair</a>
    </div>
  </li>
</ul>
  </div>
  <!--Start Main -->
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Sistema de solicitaçãoes e monitoramento<h1>Registro suporte:</h1></span>
      <h3 id="ass"> _By M. Correia</h3>
    </div>
    <div class="dataehora">
      <script language=javascript type="text/javascript">
      now = new Date
      document.write (now.getHours() + ":" + now.getUTCMinutes() + ", " + now.getDate() + "/" + now.getMonth() + "/" + now.getFullYear() )
      </script>
      </div>


        