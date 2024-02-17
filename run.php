<?php
// remove all file on decode
echo "hapus decode";
system("rm ./decode/*");
echo "telah terhapus :v" . PHP_EOL;

// Dump data uri base64 
echo "Sedang Dump" . PHP_EOL;
require_once("./script/dump64.php");
echo "Dump success bro..." . PHP_EOL;

// Decoding to jpeg
echo "Lanjut Decode" . PHP_EOL;
require_once("./script/decode.php");
echo "Decode selesai silahkan buka fotonya kawan 😎" . PHP_EOL;

// remove all file on folder output
echo "Hapus file output" . PHP_EOL;
system("rm ./output/*");
echo "File output telah terhapus";

// remove file curl and recreate
echo"hapus curl.cmd dan recreate curl.cmd";
system("rm ./curl.cmd && touch ./curl.cmd");
echo "selesai buat curl.cmd" . PHP_EOL;