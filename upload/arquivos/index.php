<html>
    <body>
        
        <?php
        if (isset($_POST['envioformulario'])):
            $alllowedformats = array("png", "jpeg", "jpg", "gif");
            $qttarquivos = count($_FILES['arquivos']['name']);
            $contador = 0;
            while ($contator < $qttarquivos):
        $expand = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);
        
            if(in_array($expand, $allowedformats)):
                $pasta = "arquivos/";
                $temporario = $_FILES['arquivo']['tmp_name'][$contador];
                $novoNome = uniqid().$expand;
                
                if(move_uploaded_file($temporario, $pasta.$novonome)):
                    $mensagem[]= "upload feito com sucesso!";
                else:
                    $mensagem[]="não foi possivel fazer o upload";
                endif;
            else:
                echo "arquivo incompativel";
            endif;
            $contador++;
            endwhile;
        endif;
        ?>
        
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" 
              enctype="multipart/form-data">
            <input type="file" name="arquivo[]" multiple><br>
            <input type="submit" name="envioformulario">
        </form>
    </body>
</html>
