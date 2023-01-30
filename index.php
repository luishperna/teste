<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP teste</h1>

    <?php
    if (isset($_POST['enviar-formulario'])):
        #var_dump($_FILES);
        echo "<br>";
        $nomeoriginal = pathinfo($_FILES["arquivo"]["name"], PATHINFO_BASENAME);
        $extensao = pathinfo($_FILES["arquivo"]["name"], PATHINFO_EXTENSION);
        $pasta = "img/";
        $temporario = $_FILES['arquivo']['tmp_name'];
        #$novonome = uniqid().".$extensao";

        move_uploaded_file($temporario, $pasta.$nomeoriginal.".".$extensao);
            

    endif;


    ?>

    <form action="index.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="arquivo">
        <input type="submit" name="enviar-formulario">
    </form>

        <?php 
            $valor1 = 10;
            $valor2 = 20;
            $valor3 = $valor1 + $valor2;
            echo "<h2>$valor3</h2>"; 
            
            $arquivo = "arquivo.txt";
            $texto = "Texto de exemplo";
            $arquivoaberto = fopen($arquivo, "r");
            #fwrite($arquivoaberto, $texto);
            

            $textolido = fread($arquivoaberto,1024);

            fclose($arquivoaberto);

            echo "$textolido";

        ?>

        <h1>Teste de variavel ed ambiente</h1>
        <?php
        $variavel_de_ambiente = getenv("AAAAAA");

        echo "$variavel_de_ambiente<br>";

        var_dump(getenv());

        
        ?>
    
</body>
</html>