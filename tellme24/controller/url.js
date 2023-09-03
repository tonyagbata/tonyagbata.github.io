// target id and desc

const urlParams = new URLSearchParams(window.location.search);
// id is must have to control the website

const getID = urlParams.get('id');
const getDesc = urlParams.get('desc');

function goBackHome() {
    location = "home"
};

if (getID && getDesc) {
    const id = getID.toLowerCase();
    const desc = getDesc.toLowerCase();

    if (id == "page") {
        switch (getID == "page") {
            case desc == "vocations":
                $("#mainApp").html(`search database for random profile of ${getDesc}`)
                break;

            case desc == "artisians":
                $("#mainApp").html(`search database for random profile of ${getDesc}`)
                break;
            case desc == "professionals":
                $("#mainApp").html(`search database for random profile of ${getDesc}`)
                break;

            default:
                // goBackHome();
                break;
        }
    }
    else if (id == "account") {
        switch (desc == "account") {
            case desc == "sign_in":
                $("#mainApp").html(`${getDesc}`)
                break;

            case desc == "sign_up":
                $("#mainApp").html(`${getDesc}`)
                break;

            default:
                // goBackHome();
                break;
        }
    }

    else if (id == "search") {
        $("#mainApp").html(`sarch for ${getDesc}`)
    }
    else if (id == "view") {
        $("#mainApp").html(`user details for ${getDesc}`)
    }
    else if (id == "foot") {
        if (getDesc == "about_us") {
            $("#mainApp").html(`got to ${getDesc}`)
        }
        else if (getDesc == "policy") {
            $("#mainApp").html(`go to ${getDesc}`)
        }
    }
    else if (id == "auth") {
        $.post('api/auth.php', { purposeSelected: product, purposeCategory: purpose }, function (respond) {

            $(".product_purpose").html(respond).css({ "z-index": "20" })

            $(".purposeTable").css({ "filter": "blur(10px)", "z-index": "0", "overflow": "hidden" })
        });

    }
    else {
        // goBackHome();
    }
}
