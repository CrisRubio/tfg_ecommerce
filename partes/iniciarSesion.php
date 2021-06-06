<main>
  <br><br><br>

  <h1>INICIAR SESIÓN</h1>

  <br>

  <form action="?action=do_login" method="POST">

  <table class="formTable">
    <tr>
      <td class="formTableTd">
         <!--Email-->
        <div class="form-group">
          <label for="user">Nombre de usuario: *</label>
          <input type="text" name="username" class="form-control" placeholder="Introduzca su nombre de usuario" id="email" required>
        </div>
      </td>
    </tr>

    <tr>
      <td class="formTableTd">
        <!--Contraseña-->
        <div class="form-group">
          <label for="pwd">Contraseña: *</label>
          <input type="password" name="pwd" class="form-control" placeholder="Introduzca su contraseña" id="pwd" required>
        </div>
      </td>
    </tr>

    <tr>
      <td class="formTableTdBotones">
        <!--Botones-->
        <button type="reset" class="btn btn-danger">Reset</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </td>
      <br>
    </tr>

    <tr>
      <td>
      Los campos indicados con * son obligatorios
      </td>
    </tr>

  </table>

  </form>
</main>