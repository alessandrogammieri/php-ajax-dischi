function init() {
    listDisco();
}

function listDisco() {  
    $.ajax ({
        url: "api.php",
        method: "GET",
        success: function (data) {
            console.log(data);
        },
        error: function () {
            alert("C'è stato un errore in download");
        }
    });
}

$(document).ready(init);