if (typeof (EventSource) !== "undefined") {
    var source = new EventSource("server.php");
    source.onmessage = function (event) {

        let getE = JSON.parse(event.data)

        // console.log(getE[1])

        document.getElementById("result").innerHTML = getE[0] + "<br>";
    };
} else {
    document.getElementById("result").innerHTML = "Sorry, your browser does not support server-sent events...";
}