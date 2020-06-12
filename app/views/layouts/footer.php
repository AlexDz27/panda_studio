<?php if (isset($isAdminPage)): ?>
  <script>
    var DELETE_BOOKING_ENDPOINT = '<?= $GLOBALS['config']['ajax']['DELETE_BOOKING'] ?>';
  </script>
  <script src="public/js/ajax.js"></script>
  <script src="public/js/admin/admin.js"></script>
  </body>
  </html>
<?php else: ?>  
  <footer class="footer">
    <nav class="nav container">
      <div class="nav__main-link-container">
        <a href="index.html" class="nav-list__link nav__main-link footer__nav-list-link">Студия "Панда"</a>
      </div>

      <ul class="nav-list">
        <li class="nav-list__item">
          <a href="index.html" class="nav-list__link nav-list__link--active footer__nav-list-link">
            Главная
          </a>
        </li>
        <li class="nav-list__item">
          <a id="bookBtn" href="javascript:void(0);" class="nav-list__link footer__nav-list-link">
            Записаться
          </a>
        </li>
      </ul>
    </nav>
  </footer>

  <script>
    var BOOK_FORM_ENDPOINT = '<?= $GLOBALS['config']['ajax']['BOOK_FORM'] ?>';
  </script>
  <script src="public/js/ajax.js"></script>
  <script src="public/js/mobile-menu.js"></script>
  <script src="public/js/book-form.js"></script>
  </body>
  </html>
<?php endif; ?>
