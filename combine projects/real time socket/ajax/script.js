// Perform AJAX long polling to get updates
function getUpdates() {
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            const data = JSON.parse(xhr.responseText);

            // Process the received data
            // ...

            document.getElementById("showData").innerHTML = data

            // Initiate the next update
            getUpdates();
        }
    };

    xhr.open('GET', 'server.php', true);
    xhr.send();
}

// Start getting updates
getUpdates();
