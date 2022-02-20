<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Inicio do formulario -->
      
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
            </tr>
          </thead>
          <tbody>
          <?php $counter1=-1;  if( isset($users) && ( is_array($users) || $users instanceof Traversable ) && sizeof($users) ) foreach( $users as $key1 => $value1 ){ $counter1++; ?>
            <tr>
              <td><?php echo htmlspecialchars( $value1["idusuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
              <td><?php echo htmlspecialchars( $value1["des_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
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
  
