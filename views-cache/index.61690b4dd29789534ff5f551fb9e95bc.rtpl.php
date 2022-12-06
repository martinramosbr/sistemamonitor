<?php if(!class_exists('Rain\Tpl')){exit;}?>

      <!-- Inicio do formulario -->
     <p id="titulo-cadastro-ticket" style="padding-left: 40%; padding-bottom: 10px; font-style: italic;">Enviar novo ticket</p>
    <div class="campo-cadastro" style="width: 87%; top: -50px;">
    <form action="/sistema" method="post" class="formulario-ticket">
      <br>
        <div class="form-group row">
          <div class="row">
            <div class="col">
              <label for="form-control titulo" style="width:80px;">Nome</label>
              <input type="text" class="form-control" placeholder="Seu nome" style="width:390px; margin-right: 0px; position: relative;" name="des_nome" required>
              <br>
              <label for="form-control titulo" style="width:80px;">E-mail</label>
              <input type="text" class="form-control" placeholder="exemplo@email.com" style="width:390px; margin-right: 0px position: relative;" name="des_email" required>
              <br>        
            </div>
          </div>
        </div>
        <div class="form-group row">
          <div class="row">
          <div class="col">
            <label for="form-control titulo" style="width:173px;">Titulo da solicitação</label>
            <input type="text"class="form-control" placeholder="Digite:" id="form-control titulo" style="width: 390px; margin-right: 0px" name="des_titulo" required>
          </div>
          </div>
        </div>
      <br>
    <div class="form-group row">         
    <label for="exampleFormControlSelect1" style="width:132px;">Departamento</label>
    <select class="form-control" id="exampleFormControlSelect1" style="width: 15%" name="des_departamento" required>
      <option>*Selecione*</option>
      <option>Comercial</option>
      <option>Financeiro Carletto</option>
      <option>Oper. Carletto</option>
      <option>Oper. Brasil Predial</option>  
    </select>
    <label for="exampleFormControlSelect1" style="width:57px;padding-left: 20px;">Tipo</label>
    <select class="form-control" id="exampleFormControlSelect1" style="width: 22%" name="des_tipo" required> 
      <option>*Selecione*</option>
      <option>Suporte equipamentos</option>
      <option>Suporte sistemas</option>
      <option>Manutenção em equipamentos</option>
      <option>Rede e Internet</option>
      <option>Solicitação de suprimentos</option>  
    </select>
    <label for="exampleFormControlSelect1" style="width: 111px;padding-left: 27px;">Prioridade</label>
    <select class="form-control" id="exampleFormControlSelect1" style="width: 10%" name="des_prioridade">
      <option>*Selecione*</option>
      <option>Normal</option>
      <option>Emergencial</option>
      <option>Urgente</option> 
    </select>
    </div>  
    <br>

      <div class="form-group row">
      <br>
        <label for="exampleFormControlTextarea1" style="width: 11px;">Mensagem</label>
        <textarea style="padding: 20px;" class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Descreva sua solicitação..." name="des_mensagem" required></textarea>
      </div>
     
   
      <br><br>
    <!--<div class="form-group">
        &lt;?php if($msg != false) echo "<p> $msg </p>"; ?&gt;
        <label for="exampleFormControlFile1">Anexo: </label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="des_arquivo">
    </div>-->
      
      <input class="botao-gravar-formulario" type="submit">
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