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
            <span class="link_name">Cadastro</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Cadastro</a></li>
          <li><a href="/sistema/orgaos">Orgão</a></li>
          <li><a href="/sistema/users">Usuarios</a></li>
          <!--<li><a href="formulario-cadastro-consultas.html">Consultas</a></li>-->
        </ul>
      </li>
      <li>
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
      </li>
      <li>
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
      </li>
