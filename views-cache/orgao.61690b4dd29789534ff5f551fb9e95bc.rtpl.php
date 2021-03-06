<?php if(!class_exists('Rain\Tpl')){exit;}?>  <li>
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
      <!--<div class="campo-cadastro">
      <p id="titulo-cadastro-orgao">Ogãos Cadastrados</p>
      
        <form action="/" method="post" class="formulario-cadastro">
          <button id="novo" href="novo-cadastro-orgao.html">Novo</button>
          <button id="filtro">Filtro</button>
          <br><br>
          <td id="th1">Orgão</td>
          <input class="nome-orgao-input" type="text" name="nome-orgao">
          <br><br>
          <th id="th2">Data Vencimento</th>
          <input class="data-vencimento-input" type="date" name="data-vencimento">
          <br><br>
          <th id="th3">Valor Contrato</th>
          <input class="valor-contrato-input" type="number">
          <br><br><br>
          <button class="botao-gravar-formulario">Voltar</button>
        </form>
    
      </div> -->
      <div class="titulo-tabela">
      <p id="titulo-cadastro-usuario">Órgão Cadastrados</p>
          <button id="novo-cadastro-usuario" onclick="window.location.href='novo-orgao';">Novo</button>
          <button id="filtro-cadastro-usuario" onclick="window.location.href='iltro-cadastro-orgao.html';">Filtro</button>
          <br><br>
      </div>
      <div id="tabelas-1">
        <table class="table table-light">
          <thead>
            <tr>
              <th scope="col">Identificador</th>
              <th scope="col">Contrato</th>
              <th scope="col">Data de Vencimento</th>
              <th scope="col">Valor do Contrato</th>
              <th scope="col">Ações</th>
            </tr>
          </thead>
          <tbody>
            <?php $counter1=-1;  if( isset($orgao) && ( is_array($orgao) || $orgao instanceof Traversable ) && sizeof($orgao) ) foreach( $orgao as $key1 => $value1 ){ $counter1++; ?>
            <tr>
              <td><?php echo htmlspecialchars( $value1["idcontratos"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
              <td><?php echo htmlspecialchars( $value1["des_contrato"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
              <td><?php echo htmlspecialchars( $value1["des_datavencimento"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
              <td><?php echo htmlspecialchars( $value1["des_valorcontrato"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
              <td><a href="#" style="font-size: 8px; margin-left: 2px;" class="btn btn-primary btn-xs">Editar</a><a href="#" style="font-size: 8px; margin-left: 2px;" class="btn btn-danger btn-xs">Delete</a></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
        <button class="botao-voltar" onclick="history.go(-1)">Voltar</button>
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
  