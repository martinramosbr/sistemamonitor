<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- resolved-->
<!-- Inicio do formulario -->
      
      <div class="titulo-tabela">
      <p id="titulo-cadastro-usuario">Usuários Cadastrados</p>
          <button id="novo-cadastro-usuario" onclick="window.location.href='/sistema';">Novo</button>
          <button id="filtro-cadastro-usuario" onclick="window.location.href='/sistema/filtrar-tickets-atendido';">Filtro</button>
          <br><br>
      </div>
      <div id="tabelas-1">
        <table class="table table-light">
          <thead>
            <tr>
              <th scope="col">Nº Ticket</th>
              <th scope="col">Titulo</th>
              <th scope="col">Responsável</th>
              <th scope="col">Status</th>              
            </tr>
          </thead>
          <tbody>
          <?php $counter1=-1;  if( isset($ticketatt) && ( is_array($ticketatt) || $ticketatt instanceof Traversable ) && sizeof($ticketatt) ) foreach( $ticketatt as $key1 => $value1 ){ $counter1++; ?>
            <tr>
              <td><?php echo htmlspecialchars( $value1["idusuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
              <td><?php echo htmlspecialchars( $value1["des_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
              <td><a href="/sistema/users/<?php echo htmlspecialchars( $value1["idusuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" style="font-size: 8px; margin-left: 2px;" class="btn btn-primary btn-xs">Editar</a><a href="/sistema/users/<?php echo htmlspecialchars( $value1["idusuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete" style="font-size: 8px; margin-left: 2px;" class="btn btn-danger btn-xs">Delete</a></td>
              
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
  
