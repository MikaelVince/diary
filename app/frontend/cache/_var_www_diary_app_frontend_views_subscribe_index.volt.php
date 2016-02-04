<div class="col-md-6 col-md-offset-3 sub_form" ng-controller="ckFormCtrl">
  <h2 class="subForm_title">Formulaire d'inscription </h2>
  <form name="form_sub" novalidate ng-submit="create(user)">

      <div class="form-group">
          <label for="date">Nom:</label>
          <input class="form-control" name="familyName" ng-model="user.familyName" required/>
      </div>

      <div class="form-group">
          <label for="author">Prénom:</label>
          <input class="form-control" name="name" ng-model="user.name" required/>
      </div>

      <div class="form-group">
          <label for="meta-title">Email:</label>
          <input class="form-control" name="email" ng-model="user.email" required/>
      </div>

      <div class="form-group">
          <label for="meta-description">Mot de passe(minimum 6 caractères):</label>
          <input class="form-control" name="password" ng-model="user.password" required/>
      </div>

      <div class="form-group">
          <label for="slug">Confirmer mot de passe:</label>
          <input class="form-control" name="passwordConfirm" ng-model="user.passwordConfirm" required/>
      </div>

      <div class="form-group">
          <button class="btn btn-success btn-block" type="submit" name="create">Créer un compte</button>
      </div>
  </form>
</div>
