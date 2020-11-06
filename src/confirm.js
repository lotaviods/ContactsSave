function delelar() {
    if (window.confirm("Confirmar ?")) {
        $.ajax({
            url: "./Del.php",
        })
        alert('Confirmado');
        window.location = "./Index.php";
    } else {
        window.location = "./Index.php";
    }
}