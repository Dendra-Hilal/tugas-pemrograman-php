<?php

// Soal nomor satu: Buatlah sebuah program sederhana dengan menggunakan switch statement, yang menentukan harga barang berdasarkan kode barang yang dimasukkan.

$jajanan = "Gethuk";

switch ($jajanan) {
    case "Wajik":
        print("Harga Jajanan Tradisional $jajanan adalah Rp 50.000,00.");
        break;
    case "Pukis":
        print("Harga Jajanan Tradisional $jajanan adalah Rp 5.000,00.");
        break;
    case "Gethuk":
        print("Harga Jajanan Tradisional $jajanan adalah Rp 3.000,00.");
        break;
    case "Nagasari":
        print("Harga Jajanan Tradisional $jajanan adalah Rp 2.000,00.");
        break;
    case "Lumpia":
        print("Harga Jajanan Tradisional $jajanan adalah Rp 7.500,00.");
        break;
    default:
        print("Jajanan tersebut tidak tersedia. Silahkan untuk memilih jajanan tradisional yang tersedia saja.");
        break;
}