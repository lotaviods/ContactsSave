<?php

use Lotaviods\Contacts\ConnectBank;
use Lotaviods\Contacts\Config\BankFunctions;

require_once './vendor/autoload.php';
if ($_POST['nome'] == '' or $_POST['email'] == '') {
    // Verificando se o email ou o nome estiver vazio 
    ?>
    <script>
    window.location = "Index.php";
    alert("Nome ou Email não pode estar vazio");
    </script>

    <?php

} else {

    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        // Validação do email e inserção dos dados
 
        $bank = new BankFunctions();
        $bank->Add($_POST['nome'], $_POST['email']);

        ?>
<script>
window.location = "Index.php";
</script>


<?php
    } else {
        ?>
        <script>
        window.location = "Index.php";
        alert("Email precisa ser valido");
        </script>
        <?php
    }
}
