function delelar() {
    if (window.confirm("Confirmar ?")) {
        $.ajax({
            url: "src/Del.php",
        })
        alert('Confirmado');
        window.location = "Index.php";
    } else {
        window.location = "Index.php";
    }
}