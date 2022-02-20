<?php if(!class_exists('Rain\Tpl')){exit;}?>      <!-- Inicio do formulario -->
      
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

