<?php

namespace App\Libraries;

class TimeLibrary
{

    // Mendapatkan waktu saat ini di zona waktu Jakarta
    
    // Memformat waktu ke string
    $formattedTime = $timeLibrary->format($now, 'Y-m-d H:i:s');
    
    // Mengubah string tanggal dan waktu menjadi objek DateTime
    $dateTime = $timeLibrary->parse('2024-03-08 12:00:00');
    
    // Mendapatkan tanggal yang diformat berdasarkan timestamp
    $formattedDate = $timeLibrary->getFormattedDate(time(), 'd F Y');
    
    // Mendapatkan waktu yang diformat berdasarkan timestamp
    $formattedTime = $timeLibrary->getFormattedTime(time(), 'h:i A');
    }
    $timeLibrary = new TimeLibrary();
    $now = $timeLibrary->now('Asia/Jakarta');

