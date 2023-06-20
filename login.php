<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <style>
        body{
           font-family: Arial, Helvetica, sans-serif;
           background-image: linear-gradient(85deg,rgb(83, 1, 124) , rgb(4, 208, 188));
        }
        div{
            background-color: rgba(0,0,0, 0.3);
            position:absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
            padding: 40px;
            border-radius: 20px;
            color: white;  
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            padding-left: 10px;
            font-size: 15px;
            border-radius: 5px;
        }
        .inputSubmit{
            background-color: rgb(4, 208, 188);
            border: none;
            padding: 25px;
            width: 50%;
            border-radius: 10px;
            color: black;
            font-size: 15px;
            
        }
        .inputSubmit:hover{
            background-color:rgb(5, 134, 121);
            cursor: pointer;
        }
        a{
            text-decoration:none;
            background-color: rgb(4, 208, 188);
            border: none;
            padding: 25px;
            width: 100%;
            border-radius: 10px;
            color: black;
            font-size: 15px;
            cursor: pointer;
            
        }
        a:hover{
            background-color:rgb(5, 134, 121);
        }
    </style>
</head>
<body>
        <div class=>
        <h1>Login</h1>
        <form action="testelogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha" >
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
            <a href="visitantee.php">Voltar</a>
            <img src="imagens/Guedes.png" alt="Logo da minha empresa" style="position: fixed; bottom: -119px; right:643px;">
            
        </form>
    </div>
    
</body>
</html>