function buscarAutor() {
    var autor = document.getElementById("autor").value;
   
    if (autor == "") {
        document.getElementById("informacion").innerHTML = "";
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //alert("llegue");
                document.getElementById("informacion").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "../../public/controladores/buscar.php?autor=" +autor, true);
        xmlhttp.send();
    }
    return false;
}