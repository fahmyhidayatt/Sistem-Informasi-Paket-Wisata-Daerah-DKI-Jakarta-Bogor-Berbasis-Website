<?php
  $dir = "gbr/";
  if(!file_exists($dir.$_GET['file'])){
    echo "Gagal download! File sudah tidak ada di folder";
    exit();
  } else {
    header("Content-Type: octed/stream");
    header("Content-Disposition: attachment; filename=\"".$_GET['file']."\"");
    $fp = fopen($dir.$_GET['file'], "r");
    $data = fread($fp, filesize($dir.$_GET['file']));
    fclose($dir);
    print($data);
  }
?>