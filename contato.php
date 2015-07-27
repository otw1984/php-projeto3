<div class="container">
  <div class="row">
    <div class="col-md-7">
      <h2>FORMUlÁRIO</h2>

      <form class="form-horizontal" method="post" action="enviacontato.php">
        <div class="form-group">
          <div class="col-sm-10">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">Nome</span>
              <input type="text" name="nome" class="form-control" placeholder="Nome Completo" aria-describedby="basic-addon1">
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-10">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">Email</span>
              <input type="text" name="email" class="form-control" placeholder="exemplo@exemplo.com.br" aria-describedby="basic-addon1">
            </div>
          </div>
        </div>

         <div class="form-group">
          <div class="col-sm-10">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">Assunto</span>
              <input type="text" name="assunto" class="form-control" placeholder="Assunto" aria-describedby="basic-addon1">
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-10">
            <textarea name="mensagem" class="form-control" rows="8"></textarea>
          </div>
        </div>


        <button type="submit" class="btn btn-default">Enviar</button>
      </form>
    </div>

    <div class="col-md-5">
      <h3>Localização</h3>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1516584.1176122422!2d-71.71834650000001!3d42.06293985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e3656de973bffd%3A0x45c6d03655830d1c!2sMassachusetts%2C+USA!5e0!3m2!1spt-BR!2sbr!4v1431971455993" width="100%" height="420" frameborder="0" style="border:0"></iframe>
    </div>

  </div>
</div>
