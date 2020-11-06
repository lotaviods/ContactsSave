<?php
use Lotaviods\bank\BankConf;
use Lotaviods\bank\ConnectBank;

require_once '../vendor/autoload.php';
if ($_POST['nome'] == '' or $_POST['email'] == '') {
    ?>
    <script>
    window.location = "../Index.php";
    alert("Nome ou Email não pode estar vazio");
    </script>
    <?php
} else {
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $connect = ConnectBank::CreateConnection();
        $bank = new BankConf($connect);
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