<html>

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
<textarea id="Nomes" name="Nomes" rows="15" cols="150">

    <?php 
    //Listagem do banco de dados

   /* use Lotaviods\Contacts\Config\BankConfig;
    use Lotaviods\Contacts\Config\Connection\ConnectBank;
    require_once "./vendor/autoload.php";
    $connect = ConnectBank::CreateConnection();
    $bank = new BankConfig($connect);

    $bank->List(); 
*/?>
</textarea>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="./src/confirm.js"></script>
<button onclick="delelar()">Excluir todos os contatos</button>
</body>

</html>
