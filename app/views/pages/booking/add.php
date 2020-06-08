<form action="<?= $form->action ?>" method="POST">
  <input name="date" type="date" value="<?= $form->date ?>"><br>
  <?php if (!empty($errors['date'])): ?>
    <?php foreach ($errors['date'] as $errorText): ?>
      <span class="form__error"><?= $errorText ?></span>
    <?php endforeach; ?>
  <?php endif; ?>

  <input name="time" type="time" placeholder="12:00" value="<?= $form->time ?>"><br>
  <?php if (!empty($errors['time'])): ?>
    <?php foreach ($errors['time'] as $errorText): ?>
      <span class="form__error"><?= $errorText ?></span>
    <?php endforeach; ?>
  <?php endif; ?>

  <input name="name" placeholder="Ваше имя" value="<?= $form->name ?>"><br>
  <?php if (!empty($errors['name'])): ?>
    <?php foreach ($errors['name'] as $errorText): ?>
      <span class="form__error"><?= $errorText ?></span>
    <?php endforeach; ?>
  <?php endif; ?>

  <input name="phone" type="tel" placeholder="+375 33 382 98 73" value="<?= $form->phone ?>"><br>
  <?php if (!empty($errors['phone'])): ?>
    <?php foreach ($errors['phone'] as $errorText): ?>
      <span class="form__error"><?= $errorText ?></span>
    <?php endforeach; ?>
  <?php endif; ?>

  <button type="submit">Отправить</button>
</form>
