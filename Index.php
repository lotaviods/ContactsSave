<html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<!DOCTYPE html>

<head>
    <title>Banco de dados</title>
</head>

<form action="./Main.php" method="POST">

    Nome: <input type="text" name="nome"><br>
    </br>
    Email: <input type="text" name="email">
    <button>Adicionar</button>

</form>
<textarea disabled id="Nomes" name="Nomes" rows="15" cols="150">

    <?php 
    //Listagem do banco de dados

    use Lotaviods\Contacts\Config\BankFunctions;
    require_once "./vendor/autoload.php";
    $bank = new BankFunctions();

    $bank->List(); 
?>
</textarea>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="./src/confirm.js"></script>
<button onclick="delelar()">Excluir todos os contatos</button>
</body>

</html>
