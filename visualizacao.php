<?php
    require 'conexao.php';
    
    $sql = "SELECT * FROM arquivo.images;";
    $consulta = $conexao->query($sql);
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/visualizar.css">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
            crossorigin="anonymous">
            

        <title>Visualização</title>
        <style>
        .card-img-top {
          
            width: 18rem;
            height: 200px;
        }
        h1{
            text-align: center;
            color: white;
        }
        .cads{
            color: white;
        }
        header{
            background-color: black;
        }
        body{
            background: black;
        }
        </style>

    </head>

    <body>

        <HEADER>
            <h1><a class="cads" href="index.php">Home</a></h1>
        </HEADER>
        
        <main class="container mt-5 d-flex justify-content-around flex-wrap">

            <?php
          while ($linha = mysqli_fetch_array($consulta)) {
            echo '<div class="card m-3" style="width: 18rem;">';
            echo ' <img src="'.$linha['arquivo'].'" class="card-img-top" alt="...">';
            echo '<div class="card-body">';
            echo ' <center><h5 class="card-title">  '.$linha['titulo'].'</h5></center>';
            echo ' <p class="card-text">Descrição: '.$linha['descricao'].'</p>';
            echo '    </div></div>';
           
           
            

            




            }
        ?>
        </main>










        <script src="https://code.jquery.com/jquery-3.6.3.js"
            integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
            crossorigin="anonymous"></script>


    </body>

</html>