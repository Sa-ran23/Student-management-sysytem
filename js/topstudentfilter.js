function searchTopStudents() {
    var batch = document.getElementById("batchInput").value;
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "index.php?batch=" + batch, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("output").innerHTML = xhr.responseText;
        }
    };
    xhr.send();
}
