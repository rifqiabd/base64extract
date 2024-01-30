<?php
// Fungsi untuk memisahkan curl yang memiliki base64 dan menyimpannya ke dalam file terpisah
function extract_base64_curls($file_path)
{
    $curls = file($file_path);
    $base64_curl_count = 0;

    foreach ($curls as $curl) {
        if (strpos($curl, 'data:image/jpeg;base64,') !== false) {
            $base64_curl_count++;
            $curl = substr($curl, 28);
            $curl = substr($curl, 0, -4);
            $file_name = "base/image_" . $base64_curl_count;
            file_put_contents($file_name, $curl);
        }
    }

    echo "Ditemukan $base64_curl_count curl dengan base64 dan disimpan ke folder 'base'.";
}

// Contoh penggunaan fungsi
extract_base64_curls("curl.txt");
