<?php
if(isset($_POST['submit']))
{

   include_once('config.php');

   $nome=$_POST['nome'];
   $email=$_POST['email'];
   $senha = $_POST['senha'];
   $telefone=$_POST['telefone'];
   $sexo=$_POST['genero'];
   $data_nasc=$_POST['data_nascimento'];
   $cidade=$_POST['cidade'];
   $estado=$_POST['estado'];
   $endereco=$_POST['endereco'];

   $result= mysqli_query($conexao, "INSERT INTO usuario(nome,senha,email,telefone,sexo,data_nasc,cidade,estado,endereco) VALUES ('$nome','$senha','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");

header('Location:usur.php');


   
    
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
            background-image: linear-gradient(85deg,rgb(83, 1, 124) , rgb(4, 208, 188));
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
        #submit{
            background-color: rgb(4, 208, 188);

            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;

        }
        #submit:hover{
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
<body>
    <br>
<a href="sistema.php">Voltar</a>

    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Formulário de cadastro</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo:</label>         
                </div>
                <br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email:</label>         
                </div>
                <br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone:</label>         
                </div>
                
                <p>Sexo:</p>
                <input type="radio" name="genero" id="feminino" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" name="genero" id="masculino" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" name="genero" id="outro" value="outro" required>
                <label for="outro">Outro</label>
                <br>
                <div class="inputBox">
                    <label for="data_nascimento" ><b>Data de nascimento:</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento"  required> 
                    
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade:</label>         
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado:</label>         
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço:</label>         
                </div>
                <br>
                <input type="submit" name="submit" id="submit">
                <img src="imagens/Guedes.png" alt="Logo da minha empresa" style="position: fixed; bottom: -8px; right:645px;">
    

            </fieldset>
        </form>
    </div>  
</body>
</html>