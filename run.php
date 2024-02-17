<?php
// remove all file on decode
echo "hapus decode";
system("rm ./public/decode/*");
echo "telah terhapus :v" . PHP_EOL;

// Dump data uri base64 
echo "Sedang Dump" . PHP_EOL;
require_once("./helper/dump64.php");
echo "Dump success bro..." . PHP_EOL;

// Decoding to jpeg
echo "Lanjut Decode" . PHP_EOL;
require_once("./helper/decode.php");
echo "Decode selesai silahkan buka fotonya kawan 😎" . PHP_EOL;

// remove all file on folder output
echo "Hapus file output" . PHP_EOL;
system("rm ./public/output/*");
echo "File output telah terhapus";

// remove file curl and recreate
echo"hapus curl.cmd dan recreate curl.cmd";
system("rm ./public/upload/curl.cmd && touch ./public/upload/curl.cmd");
echo "selesai buat curl.cmd" . PHP_EOL;