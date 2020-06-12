<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php if (isset($isAdminPage)): ?>
    <link rel="stylesheet" href="public/css/normalize.css">
    <link rel="stylesheet" href="public/css/grid.css">
    <link rel="stylesheet" href="public/css/scaffolding.css">
    
    <link rel="stylesheet" href="public/css/admin/admin.css">
  <?php else: ?>

    <link rel="stylesheet" href="public/css/normalize.css">
    <link rel="stylesheet" href="public/css/fonts.css">
    <link rel="stylesheet" href="public/css/grid.css">
    <link rel="stylesheet" href="public/css/scaffolding.css">
    <link rel="stylesheet" href="public/css/nav.css">
    <link rel="stylesheet" href="public/css/hero.css">
    <link rel="stylesheet" href="public/css/services.css">
    <link rel="stylesheet" href="public/css/about-us.css">
    <link rel="stylesheet" href="public/css/price-catalogue.css">
    <link rel="stylesheet" href="public/css/contact.css">
    <link rel="stylesheet" href="public/css/footer.css">
    <link rel="stylesheet" href="public/css/book-btn.css">
    <link rel="stylesheet" href="public/css/book-form.css">
    <link rel="stylesheet" href="public/css/booking-app.css">

    
  
  <?php endif; ?>

  <title><?= $title ?></title>
</head>
<?php if (isset($isAdminPage)): ?>
  <body class="body admin">
    
  
<?php else: ?>
  <body class="body home">
    
    <header class="header header-nav">
      <h1 class="visually-hidden">Студия "Панда"</h1>

      <nav class="nav container">
        <div class="nav__main-link-container">
          <a href="index.html" class="nav-list__link nav__main-link">Студия "Панда"</a>
        </div>

        <ul class="nav-list">
          <li class="nav-list__item">
            <a href="index.html" class="nav-list__link nav-list__link--active">
              Главная
            </a>
          </li>
          <li class="nav-list__item">
            <a href="javascript:void(0);" class="nav-list__link open-book-form-btn">
              Записаться
            </a>
          </li>
        </ul>

        <button type="button" class="burger">
          <span class="burger__bar burger__bar--1 burger__bar--change"></span>
          <span class="burger__bar burger__bar--2 burger__bar--change"></span>
          <span class="burger__bar burger__bar--3 burger__bar--change"></span>
        </button>
      </nav>
    </header>
<?php endif; ?>
