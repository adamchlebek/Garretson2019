<?php
$zip = new ZipArchive();
$filename = "Garretson2019.zip";

if ($zip->open($filename, ZipArchive::CREATE)!==TRUE) {
  exit("cannot open <$filename>\n");
}

$dir = 'photos/';

// Create zip
if (is_dir($dir)){

    if ($dh = opendir($dir)){
        foreach(glob($d.'*.{jpg,JPG,jpeg,JPEG,png,PNG}',GLOB_BRACE) as $file){
            $zip->addFile($file)
        }

        closedir($dh);
    }
}
$zip->close();

echo $file;
?>