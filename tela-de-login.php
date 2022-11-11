<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <style>
        body {
            padding: 0;
            margin: 0;
        }
        form {
           font-family: Verdana, Geneva, Tahoma, sans-serif;
           font-size: 15px;
           background-color: #cc3300;
           max-width: 500px;
        }

        h1 {
            margin-bottom: 20px;
            margin-left: 20px;
            color: #66ffff;
            text-shadow: 5px 5px 5px 5px;
        }

        input, textarea {
            width: 200px;
            padding: 10px;
            color: black;
            margin-left: 20px;
            margin-top: 10px;
            -webkit-boder-radius: 5px;
            -moz-border-radius: 5px;
            border: 1px solid;
        }

        input:hover, textarea:hover, input:focus, textarea:focus {
           border-color: #000066;
           box-shadow: 5px 0px 9px #ffff00;
           background-color: #66ffff;
           color: black;
           font-weight: bold;
        }

        .enviar {
            background-color: #66ffff;
            height: 40px;
            width: 100px;
            font-weight: bold;
            border-radius: 5px;
            -webkit-boder-radius: 5px;
            -moz-border-radius: 5px;
            border: 1px solid;
            color: black;
        }

        textarea {
            width: 400px;
            height: 120px;
            line-height: 20px;
            max-width: 400px;
        }

        form label {
            margin-left: 20px;
            color: #ffffff;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <form name="meu_form" action="form.php" method="post">
        <h1>Entre em contato</h1>

        <input type="text" id="nomeid" placeholder="João Grilo" required="required" name="nome">
        <label for="nome">Nome</label>

        <input type="tel" id="foneid" placeholder="(xx) xx-xx-xx-xx" name="fone">
        <label for="fone">Fone</label>

        <input type="email" id="emailid" placeholder="fulano@gmail.com" name="email">
        <label for="email">Email</label>

        <textarea name="textid" placeholder="Dedixe sua opinião" id="" cols="30" rows="10"></textarea>


        <input type="submit" value="enviar">
    </form>
</body>
</html>