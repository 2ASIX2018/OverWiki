<form id="Login" action="login.php" method="post">
        <div class="form-group">
            <input type="text" class="form-control" required="required" name="inputUser" placeholder="Usuari">
        </div>

        <div class="form-group">
            <input type="password" class="form-control" required="required" name="inputPassword" placeholder="Contrasenya">
        </div>

        <div class="form-group">
          <div class="checkbox">
              <label><input type="checkbox" name="rememberMe" id="rememberMe" value="remember">
              Recorda'm en aquest ordinador
              </label>
          </div>
        </div>

        <button type="submit" class="btn btn-primary">Login</button>

    </form>