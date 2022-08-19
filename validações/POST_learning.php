<!DOCTYPE html>
<?php
//teste pra erros//
if (isset($_POST['envioformulario'])):
    $erros = array();

//limpando as informações
    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
        if (!filter_var($idade, FILTER_VALIDATE_INT)):
            $erros[] = "Idade precisa ser um inteiro";
        endif;
        
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        if(filter_var($email, FILTER_VALIDATE_EMAIL)):
            $erros[] = "Email inválido";
        endif;
        
    $peso = filter_input (INPUT_POST, 'peso', FILTER_SANITIZE_NUMBER_FLOAT);
        if (filter_var($peso, FILTER_VALIDATE_FLOAT)):
            $erros[] = "Peso inválido";
        endif;
        
    $ip = filter_input (INPUT_POST, 'Ip', FILTER_SANITIZE_NUMBER_FLOAT);
        if (filter_var($ip, FILTER_VALIDATE_FLOAT)):
            $erros[] = "digite o ip de forma válida";
        endif;
        
    $URL = filter_input(INPUT_POST, 'URL', FILTER_SANITIZE_URL);
        if (filter_var($URL, FILTER_VALIDATE_URL)):
            $erros[] = "URL inválida";
        endif;
    
 //validando informações//   
/*  if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
            $erros[] = "Idade precisa ser um inteiro";
    endif;
    
    if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
            $erros[] = "E-mail inválido!";
    endif;
    
    if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)):
            $erros[] = "peso precisa ser um número";
    endif;
    
    if(!$Ip = filter_input(INPUT_POST, 'Ip', FILTER_VALIDATE_IP)):
            $erros[] = "Ip inválido";
    endif;
    
    if(!$URL = filter_input(INPUT_POST, 'URL', FILTER_VALIDATE_URL)):
            $erros[] = "URL inválida";
    endif;
*/ 
    //exibindo os erros//
    if (!empty($erros)):
        foreach ($erros as $erro):
        echo "<li> $erro </li>";
        endforeach;
        else:
            echo "todos os campos foram preenchidos corretamente";
    endif;
endif;


?>

<?php



?>
<html>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            Idade: <input type="text" name="idade"><br>
            Email: <input type="email" name="email"><br>
            Peso: <input type="text" name="peso"><br>
            Ip: <input type="text" name="ip"><br>
            URL: <input type="text" name="url"><br>
            <button type="submit" name="envioformulario"> Enviar </button><br>
        </form>
    </body>  
</html>


