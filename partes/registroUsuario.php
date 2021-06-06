<main>
    <br><br><br>

    <h1>REGISTRARSE</h1>

    <br>
    <form action="?action=new_user" method="POST" class="needs-validation" novalidate>

    <table class="formTable">

      <tr>
        <td class="formTableTd">
          <!--Nombre-->
          <div class="form-group">
            <label for="name">Nombre: *</label>
            <input type="text" name="name" class="form-control" placeholder="Introduzca su nombre" id="name" required>
            <div class="invalid-feedback">Introduzca su nombre</div>
          </div>
        </td>
        <td class="formTableTd">
          <!--Apellidos-->
          <div class="form-group">
            <label for="surname">Apellidos: *</label>
            <input type="text" name="surname" class="form-control" placeholder="Introduzca sus apellidos" id="surname" required>
            <div class="invalid-feedback">Introduzca su/sus apellido/s</div>
          </div>
        </td>
        <td>
          <!--Dni-->
          <div class="form-group">
            <label for="dni">DNI: *</label>
            <input type="text" name="dni" class="form-control" placeholder="Introduzca sus apellidos" id="surname" required>
            <div class="invalid-feedback">Introduzca su dni</div>
          </div>
        </td>
      </tr>

      <tr>
        <td class="formTableTd">
          <!--Email-->
          <div class="form-group">
            <label for="email">Correo electrónico: *</label>
            <input type="email" name="email" class="form-control" placeholder="Introduzca su correo electrónico" id="email" required>
            <div class="invalid-feedback">Introduzca su correo electrónico</div>
          </div>
        </td>
        <td class="formTableTd">
          <!--Teléfono-->
          <div class="form-group">
            <label for="phone">Teléfono: *</label>
            <input type="text" name="phone" class="form-control" placeholder="Introduzca su número de contacto" id="phone" required>
            <div class="invalid-feedback">Introduzca su teléfono</div>
          </div>
        </td>
        <td class="formTableTd">
          <!--Dirección-->
          <div class="form-group">
            <label for="address">Calle: *</label>
            <input type="text" name="address" class="form-control" placeholder="Introduzca su dirección" id="address" required>
            <div class="invalid-feedback">Introduzca su calle</div>
          </div>
        </td>
      </tr>

      <tr>        
        <td class="formTableTd">
          <!--Número-->
          <div class="form-group">
            <label for="number">Número: *</label>
            <input type="text" name="number" class="form-control" placeholder="Introduzca el número" id="number" required>
            <div class="invalid-feedback">Introduzca su número</div>
          </div>
        </td>
        <td class="formTableTd">
          <!--Piso-->
          <div class="form-group">
            <label for="piso">Piso:</label>
            <input type="text" name="piso" class="form-control" placeholder="Introduzca el piso" id="piso">
          </div>
        </td>
        <td class="formTableTd">
          <!--Puerta-->
          <div class="form-group">
            <label for="puerta">Puerta:</label>
            <input type="text" name="puerta" class="form-control" placeholder="Introduzca la puerta" id="puerta">
          </div>
        </td>
      </tr>

      <tr>
        <td class="formTableTd">
          <!--Provincia-->
          <div class="form-group">
            <label for="provincia">Provincia: *</label>
            <input type="text" name="provincia" class="form-control" placeholder="Introduzca la provincia" id="provincia" required>
            <div class="invalid-feedback">Introduzca su provincia</div>
          </div>
        </td>
        <td class="formTableTd">
          <!--Población-->
          <div class="form-group">
            <label for="poblacion">Población: *</label>
            <input type="text" name="poblacion" class="form-control" placeholder="Introduzca la población" id="poblacion" required>
            <div class="invalid-feedback">Introduzca su población</div>
          </div>
        </td>
        <td class="formTableTd">
          <!--CP-->
          <div class="form-group">
            <label for="cp">Código Postal: *</label>
            <input type="text" name="cp" class="form-control" placeholder="Introduzca el código postal" id="cp" required>
            <div class="invalid-feedback">Introduzca su código postal</div>
          </div>
        </td>
      </tr>

      <tr>        
        <td class="formTableTd" colspan="2">
          <!--Nombre de usuario-->
          <div class="form-group">
            <label for="username">Usuario: *</label>
            <input type="text" name="username" class="form-control" placeholder="Introduzca el nombre de usuario" id="user" required>
            <div class="invalid-feedback">Introduzca su nombre de usuario</div>
          </div>
          <td class="formTableTd">
          <!--Constraseña-->
          <div class="form-group">
            <label for="pwd">Contraseña: *</label>
            <input type="password" name="pwd" class="form-control" placeholder="Introduzca su contraseña" id="pwd" required>
            <div class="invalid-feedback">Introduzca su contraseña</div>
          </div>
      </tr>

      <tr>
        <td colspan="3" class="formTableTdBotones">
          <!--Botones-->
          <button type="reset" class="btn btn-danger">Reset</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </td>
      </tr>

      <tr>
        <td colspan="3">
        Los campos indicados con * son obligatorios
        </td>
    </tr>

    </table>
    
  </form>

  <br><br><br><br><br>

  <script>
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        var forms = document.getElementsByClassName('needs-validation');
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
</script>
</main>