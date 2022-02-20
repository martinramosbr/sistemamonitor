<?php if(!class_exists('Rain\Tpl')){exit;}?>   <li>
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
      <p id="titulo-cadastro-orgao">Cadastro do Orgão</p>
      
        <form action="/sistema/novo-orgao" method="post" class="formulario-cadastro">
          <br><br>
          <td id="th1">Orgão</td>
          <input class="nome-orgao-input" type="text" name="des_contrato">
          <br><br>
          <th id="th2">Data Vencimento</th>
          <input class="data-vencimento-input" type="date" name="des_datavencimento">
          <br><br>
          <th id="th3">Valor Contrato</th>
          <input class="valor-contrato-input" type="number" name="des_valorcontrato">
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
  