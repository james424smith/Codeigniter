<div class="main-panel">
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
        <div class="container">
          <div class="row">
            <?php if (validation_errors()) : ?>
              <div class="col-md-12">
                <div class="alert alert-danger" role="alert">
                  <?= validation_errors() ?>
                </div>
              </div>
            <?php endif; ?>
            <?php if (isset($error)) : ?>
              <div class="col-md-12">
                <div class="alert alert-danger" role="alert">
                  <?= $error ?>
                </div>
              </div>
            <?php endif; ?>
            <div class="col-md-12">
              <div class="page-header">
                <h1>S'inscrire</h1>
              </div>
              <?= form_open() ?>
              <div class="form-group">
                <label for="username">Nom d'utilisateur</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Entrez un nom d'utilisateur">
                <p class="help-block">Au moins 4 caractères, lettres ou chiffres uniquement</p>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Entrer votre Email">
                <p class="help-block">Une adresse e-mail valide</p>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Entrer un mot de passe">
                <p class="help-block">Au moins 6 caractères</p>
              </div>
              <div class="form-group">
                <label for="password_confirm">Confirm password</label>
                <input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Confirmer votre mot de passe">
                <p class="help-block">Doit correspondre à votre mot de passe</p>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-default" value="Register">
              </div>
            </form>
          </div>
        </div><!-- .row -->
      </div><!-- .container -->
    </div>
  </div>
</div>
</div>