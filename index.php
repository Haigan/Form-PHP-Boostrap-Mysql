<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Uploads</title>
		<meta charset="UTF-8"/>
        <link rel="stylesheet" href="./css/style.css">
	</head>
	<body>
    <div class="box">
        <div class="img-box">
            <img src="imagens/img-formulario.png" alt="">
            <h1></h1>
        </div>
        <div class="form-box">
            <h2></h2>
            <section>
                <Form id="upload-form" enctype="multipart/form-data"  >
                    <div class="input">
                        <label for="image-title">Titulo:</label>
                        <input type="text" id="image-title" name="titulo" required>
                    </div>

                    <div class="input">
                        <label for="image-description">Descrição:</label>
                        <textarea id="image-description" name="descricao" id="" cols="55" rows="6" required></textarea>
                    </div>

                    <div class="input">
                        <label for="image-file">Arquivo:</label>
                        <input type="file" id="image-file" name="image" required>
                    </div>

                    <div class="input" id="enviar">
                      <input type="submit" value="Fazer Upload">
                    </div>
            
                                        
                   
                    <p> Fez upload dos arquivos? <a class="cads" href="visualizacao.php"> clique aqui</a> </p>
             
                    
                    

           
                </Form>
            </section>
        </div>
   </div>
    
        <script src="https://code.jquery.com/jquery-3.6.3.js"
            integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
            crossorigin="anonymous"></script>
        <script>
        $(document).ready(function() {
            $("#image-file").on("change", function() {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $("#preview").attr("src", e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });
    
            $("#upload-form").submit(function(e) {
                e.preventDefault(); //evita recarregar a pagina
                var formData = new FormData(this);
                $.ajax({
                    url: "salvar.php", // diretorio
                    type: "POST",  //metodo
                    data: formData,  //arquivo
                    success: function(data) {
                        console.log(data);
                    
            window.location.replace("sucesso.php");
   
 
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
             
                $("#upload-form").trigger("reset");      });
        });
        </script>







	</body>
</html>