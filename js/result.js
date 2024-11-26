
    function submitBatch() {
        var batch = document.getElementById("batchInput").value;

        // Send batch value to the server using AJAX
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "result.php?batch=" + batch, true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Handle the response from the server
                document.getElementById("batchResult").innerHTML = xhr.responseText;
            }
        };
        xhr.send();
    }

