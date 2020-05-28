<?php $this->layout('website') ?>

<h3>Inschrijven</h3>

<p>Schrijf u in op onze website om gebruik te maken van alle features!</p>

<form action="<?php echo url("register.handle")?>" method="POST">
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" value="<?php echo input('email')?>" class="form-control" id="email" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We delen uw email met niemand!</small>
    <?php if (isset($errors['email'] ) ): ?>
      <?php echo $errors['email'] ?>
    <?php endif;?>
  </div>
  <div class="form-group">
    <label for="wachtwoord">Wachtwoord</label>
    <input type="password" name="wachtwoord" class="form-control" id="wachtwoord">
    <?php if (isset($errors['wachtwoord'] ) ): ?>
      <?php echo $errors['wachtwoord'] ?>
    <?php endif;?>
  </div>
  <button type="submit" class="btn btn-primary">Registreren</button>
</form>
