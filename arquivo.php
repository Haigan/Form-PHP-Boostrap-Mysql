<?php
    require 'conexao.php';
    
    $imageId = $_GET['id'];
    $sql = "SELECT arquivo FROM images WHERE cod = $imageId";
    $result = $conexao->query($sql);
    $row = $result-> fetch_assoc();
    $image_path = $row['arquivo'];
return $image_path;
?>