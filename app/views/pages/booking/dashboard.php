<?php // $bookings = $bookings ?: []; ?>

Welcome to dashboard!
<br>

<ul>
  <?php foreach ($bookings as $booking): ?>
    <li><?= $booking['date'] ?></li>
  <?php endforeach; ?>
</ul>
