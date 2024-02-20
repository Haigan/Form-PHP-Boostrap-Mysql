<?php
require 'conexao.php';
  $target_dir = "uploads/";
  $arquivo = $target_dir . basename($_FILES["image"]["name"]); 
  move_uploaded_file($_FILES["image"]["tmp_name"], $arquivo); 
  
  $titulo = $_POST['titulo']; 
  $descricao = $_POST['descricao'];
  
  //INSERINDO NO BD
  $sql = "INSERT INTO images (titulo, descricao, arquivo) VALUES ('$titulo','$descricao','$arquivo')";
  if ($conexao->query($sql) === TRUE) {
    echo "Image uploaded successfully.";
  } else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
  }
  $conexao->close();
?>