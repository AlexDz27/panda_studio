<?php
require_once "{$GLOBALS['config']['APP_DIR']}/functions/app/functions.php";
?>

<header class="header">
  <h2>Сегодня: <?= $todayDate ?></h2>
</header>

<main class="main">
  <!-- <div class="booking-day booking-day--today">
    <h2>10 апреля 2020 (сегодня)</h2>
    <div class="bookings">
      <section class="booking">
        <button class="booking__delete" type="button" data-id="1337">&#10005;</button>

        <ul class="booking-info">
          <li>Время: 16:00</li>
          <li>Имя: Наталья</li>
          <li>Телефон: +375 33 382 98 74</li>
        </ul>
      </section>
    </div>
  </div> -->

  <?php if (empty($days)): ?>
    <h2>К сожалению, не забронировано ни одной брони.</h2>
  <?php else: ?>
    <?php
    $today = date('Y-m-d');
    $firstDayDate = $days[0]['date'];
    $todayDayClass = $today === $firstDayDate ? 'booking-day--today' : null;
    ?>
    <?php foreach ($days as $day): ?>
      <div class="booking-day <?= $today === $day['date'] ? 'booking-day--today' : '' ?>">
        <h2><?= getBeautifiedDate($day['date']) ?></h2>
        <div class="bookings">
          <?php foreach ($day['bookings'] as $booking): ?>
            <section class="booking">
            <button class="booking__delete" type="button" data-id="<?= $booking['id'] ?>">&#10005;</button>

            <ul class="booking-info">
              <li>Время: <b><?= $booking['time'] ?></b></li>
              <li>Имя: <b><?= $booking['name'] ?></b></li>
              <li>Телефон: <b><?= $booking['phone'] ?></b></li>
            </ul>
          </section>
          <?php endforeach; ?>
        </div>  
      </div>
    <?php endforeach; ?>
  <?php endif; ?>  
</main>
