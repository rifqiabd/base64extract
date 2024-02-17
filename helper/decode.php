<?php

// Set the directory path
$dir = "./public/output/";

// Get all the files in the directory
$files = scandir($dir);

// Loop through all the files
foreach ($files as $file) {

    // Check if the file is a .txt file
    if (pathinfo($file, PATHINFO_EXTENSION) == "cmd") {

        // Get the contents of the file
        $contents = file_get_contents($dir . $file);

        // Decode the image string
        $img = base64_decode($contents);

        // Get the image extension
        $ext = pathinfo($file, PATHINFO_EXTENSION);

        // Save the image
        file_put_contents("./public/decode/". $file . ".jpeg", $img);
    }
}

echo "Done!" . PHP_EOL;
