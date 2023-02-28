<?php

// Buatlah sebuah program sederhana dengan menggunakan ternary operator, yang mengecek apakah sebuah bilangan adalah bilangan genap atau ganjil.

$bilangan = 60;
$pertanyaan = ($bilangan % 2 == 0) ? "Bilangan $bilangan merupakan bilangan genap." : "Bilangan $bilangan merupakan bilangan ganjil.";

echo ($pertanyaan);