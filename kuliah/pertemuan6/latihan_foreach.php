<?php

$books = [
    "Panduan Belajar PHP",
    "Membangun Aplikasi WEB",
    "Tutorial PHP",
    "Membuat Chat Bot"
];

echo "<h5>Judul Buku PHP:</h5>";
echo "<ol>";
foreach($books as $buku){
    echo "<li>$buku</li>";
}
echo "</ol>";
