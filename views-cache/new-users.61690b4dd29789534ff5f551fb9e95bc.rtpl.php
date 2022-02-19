<?php if(!class_exists('Rain\Tpl')){exit;}?>  <div class="sidebar close">
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
          <li><a href="formulario-cadastro-orgao.html">Orgão</a></li>
          <li><a href="formulario-cadastro-usuario.html">Usuarios</a></li>
          <li><a href="formulario-cadastro-consultas.html">Consultas</a></li>
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
  <li>
    <div class="profile-details">
      <div class="profile-content">
      </div>
      <div class="name-job">
        <div class="profile_name">$Usuario</div>
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
      <span class="text">Sistema de Monitoramento <h1>  Contratos Carletto</h1></span>
      <h3 id="ass"> _Por Martinho Ramos</h3>
    </div>
    <div class="dataehora">
      <script language=javascript type="text/javascript">
      now = new Date
      document.write (now.getHours() + ":" + now.getUTCMinutes() + ", " + now.getDate() + "/" + now.getMonth() + "/" + now.getFullYear() )
      </script>
      </div>

      <!-- Inicio do formulario -->
      
      <div class="campo-cadastro">
      <p id="titulo-cadastro-orgao">Cadastro de Usuário</p>
      
        <form action="/sistema/novo-usuario" method="post" class="formulario-cadastro">
          <br><br>
          <td id="th1">Nome</td>
          <input class="nome-orgao-input" type="text" name="des_usuario">
          <br><br>
          <th id="th3">Senha</th>
          <input class="senha-usuario-cadastro" type="password" name="des_senha">
          <br><br><br>
          <input class="botao-gravar-formulario" type="submit"></input>
          <input class="botao-voltar-formulario" type="button" value="Voltar" onclick="history.go(-1)"></input>
        </form>

      </div>

      <!-- Fim do formulario -->

  </section>
  <!-- End Main -->
  
    
  
  <script>
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
