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
      
      <div class="titulo-tabela">
      <p id="titulo-cadastro-usuario">Usuários Cadastrados</p>
          <button id="novo-cadastro-usuario" onclick="window.location.href='novo-usuario';">Novo</button>
          <button id="filtro-cadastro-usuario" onclick="window.location.href='/sistema/';">Filtro</button>
          <br><br>
      </div>
      <div id="tabelas-1">
        <table class="table table-light">
          <thead>
            <tr>
              <th scope="col">Identificador</th>
              <th scope="col">Nome</th>
              <th scope="col">Ações</th>
              
            </tr>
          </thead>
          <tbody>
          <?php $counter1=-1;  if( isset($users) && ( is_array($users) || $users instanceof Traversable ) && sizeof($users) ) foreach( $users as $key1 => $value1 ){ $counter1++; ?>
            <tr>
              <td><?php echo htmlspecialchars( $value1["idusuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
              <td><?php echo htmlspecialchars( $value1["des_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
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
  
