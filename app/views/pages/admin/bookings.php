<?php
require_once "{$GLOBALS['config']['APP_DIR']}/functions/app/functions.php";
?>

<header class="header">
  <h2>Сегодня: <?= $todayDate ?></h2>
</header>

<main class="main">
  <?php if (empty($days)): ?>
    <h2>К сожалению, не забронировано ни одной брони.</h2>
  <?php else: ?>
    <?php foreach ($days as $day): ?>
      <?php
      $today = date('Y-m-d');
      $isBookingdayToday = $today === $day['date'];
      ?>
      <div class="booking-day <?= $isBookingdayToday ? 'booking-day--today' : '' ?>">
        <?php $bookingDayTodayText = $isBookingdayToday ? ' (сегодня)' : ''; ?>
        <h2><?= getBeautifiedDate($day['date']) . $bookingDayTodayText ?></h2>
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
