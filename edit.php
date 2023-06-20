<?php
include_once('config.php');
if(!empty($_GET['id']))
{

    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM usuario WHERE id=$id";
    $result = $conexao->query($sqlSelect);
    if($result->num_rows > 0)
    {
        while($user_data = mysqli_fetch_assoc($result))
        {
            $nome = $user_data['nome'];
            $senha = $user_data['senha'];
            $email = $user_data['email'];
            $telefone = $user_data['telefone'];
            $sexo = $user_data['sexo'];
            $data_nasc = $user_data['data_nasc'];
            $cidade = $user_data['cidade'];
            $estado = $user_data['estado'];
            $endereco = $user_data['endereco'];
        }
    }
    else
    {
        header('Location: sistema.php');
    }
}
else
{
    header('Location: sistema.php');

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário cadastro.</title>
    <style>
        
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(85deg,rgb(83, 1, 124) , rgb(4, 208, 188));;
        }
        .box {
            color: white;
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.9);
            padding: 15px;
            border-radius: 20px;
            width: 20%;       
        }
        fieldset{
            border: 2px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: rgb(4, 208, 188);
;
            border-radius: 5px;
        }.inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~.labelInput{
            top: -20px; 
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            border-radius: 10px;
            padding: 8px;
            outline: none;
            font-size: 15px;
        }
        #update{
            background-color: rgb(4, 208, 188);

            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;

        }
        #update :hover{
            background-color:rgb(5, 134, 121);
 
        }
        a{
            text-decoration:none;
            background-color: rgb(4, 208, 188);
            border: none;
            padding: 15px;
            width: 50%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            position:relative;
           
            
        }
        a:hover{
            background-color:rgb(5, 134, 121);
        }   
    


    </style>
    </head>
<br>
<a href="sistema.php">Voltar</a>
<body>
    <div class="box">
        <form action="saveEdit.php" method="POST">
            <fieldset>
                <legend><b>Alterar dados</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value=<?php echo $nome;?> required>
                    <label for="nome" class="labelInput">Nome completo:</label>         
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="senha" id="senha" class="inputUser" value=<?php echo $senha;?> required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" value=<?php echo $email;?>  required>
                    <label for="email" class="labelInput">Email:</label>         
                </div>
                <br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" value=<?php echo $telefone;?> required>
                    <label for="telefone" class="labelInput">Telefone:</label>         
                </div>
                
                <p>Sexo:</p>
                <input type="radio" name="genero" id="feminino" value="feminino" <?php echo ($sexo == 'feminino') ? 'checked' : '';?> required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" name="genero" id="masculino" value="masculino" <?php echo ($sexo == 'masculino') ? 'checked' : '';?> required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" name="genero" id="outro" value="outro" <?php echo ($sexo == 'outro') ? 'checked' : '';?> required>
                <label for="outro">Outro</label>
                <br>
                <div class="inputBox">
                    <label for="data_nascimento" ><b>Data de nascimento:</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento"   value=<?php echo $data_nasc;?> required> 
                    
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser"  value=<?php echo $cidade;?> required>
                    <label for="cidade" class="labelInput">Cidade:</label>         
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" value=<?php echo $estado;?> required>
                    <label for="estado" class="labelInput">Estado:</label>         
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" value=<?php echo $endereco;?> required>
                    <label for="endereco" class="labelInput">Endereço:</label>         
                    </div>
                <br><br>
                <input type="hidden" name="id" value= "<?php echo $id ?>">
                    <input type="submit" name="update" id="update">
                    <img src="imagens/Guedes.png" alt="Logo da minha empresa" style="position: fixed; bottom: -8px; right:645px;">
            </fieldset>
        </form>
    </div>
</body>
</html>