// jquery

let changeImg;
let imgCount = 0;

$.ajax(
    {
        url: './json/landing.json',
        type: "GET",
        success: function (response) {
            imgCount++
            for (let i = 0; i < response.length; i++) {

                setInterval(() => {
                    $(".landImg").css({ "opacity": "0" });

                    if (imgCount == 1) {
                        $("#imgVocational").attr('src', response[i].vocational.pics.two);
                        $("#writeUpVocational").html(`${response[i].vocational.writeUp.one}`);

                        $("#imgArtisian").attr('src', response[i].artisian.pics.two);
                        $("#writeUpArtisian").html(`${response[i].artisian.writeUp.one}`);

                        $("#imgProfessional").attr('src', response[i].professional.pics.two);
                        $("#writeUpProfessional").html(`${response[i].professional.writeUp.one}`);

                        imgCount++
                    }
                    else if (imgCount == 2) {
                        $("#imgVocational").attr('src', response[i].vocational.pics.three);
                        $("#writeUpVocational").html(`${response[i].vocational.writeUp.two}`);

                        $("#imgArtisian").attr('src', response[i].artisian.pics.three);
                        $("#writeUpArtisian").html(`${response[i].artisian.writeUp.two}`);

                        $("#imgProfessional").attr('src', response[i].professional.pics.three);
                        $("#writeUpProfessional").html(`${response[i].professional.writeUp.two}`);

                        imgCount++
                    }
                    else if (imgCount == 3) {
                        $("#imgVocational").attr('src', response[i].vocational.pics.four);
                        $("#writeUpVocational").html(`${response[i].vocational.writeUp.two}`);

                        $("#imgArtisian").attr('src', response[i].artisian.pics.four);
                        $("#writeUpArtisian").html(`${response[i].artisian.writeUp.two}`);

                        $("#imgProfessional").attr('src', response[i].professional.pics.four);
                        $("#writeUpProfessional").html(`${response[i].professional.writeUp.two}`);

                        imgCount++
                    }
                    else if (imgCount == 4) {
                        $("#imgVocational").attr('src', response[i].vocational.pics.one);
                        $("#writeUpVocational").html(`${response[i].vocational.writeUp.one}`);

                        $("#imgArtisian").attr('src', response[i].artisian.pics.one);
                        $("#writeUpArtisian").html(`${response[i].artisian.writeUp.one}`);

                        $("#imgProfessional").attr('src', response[i].professional.pics.one);
                        $("#writeUpProfessional").html(`${response[i].professional.writeUp.one}`);

                        imgCount = 1
                    }

                    setTimeout(() => {
                        $(".landImg").css({ "opacity": "0.1" });
                    }, 300);

                    setTimeout(() => {
                        $(".landImg").css({ "opacity": "0.5" });
                    }, 600);

                    setTimeout(() => {
                        $(".landImg").css({ "opacity": "0.8" });
                    }, 900);

                    setTimeout(() => {
                        $(".landImg").css({ "opacity": "1" });
                    }, 1200);

                }, 10000);
            }
        },
        error: function (err) {
            console.log(err);
        }
    });

// 

let landCounter = 0;

mainLandingDiv();

function mainLandingDiv(s) {
    landCounter++
    const showDiv = document.querySelectorAll(".main_landing_container");
    let displayDiv = `
    <div class="slideIndicator">
        <div></div>
        <div></div>
        <div></div>
    </div>
    `;
    $("#slideCounter").html(displayDiv);

    let slideBar = document.querySelectorAll(".slideIndicator div");

    if (landCounter == showDiv.length) {
        showDiv[0].style.display = "block";
        landCounter = 0
    };

    showDiv.forEach(sd => {
        sd.style.display = "none";

        if (s == "start") {
            showDiv[landCounter].style.display = "block";
            $(".slideIndicator div").css({ "display": "inline-block" });
            slideBar[landCounter].style.borderColor = "black";
        }
        else {
            showDiv[0].style.display = "block";
            landCounter = 0;
        }
    });
};

const slideTimer = setInterval(() => {
    mainLandingDiv("start");
}, 10000);

function slideLeft() {
    clearInterval(slideTimer);
    landCounter--
    let slideData = document.querySelectorAll(".main_landing_container");
    let barSlide = document.querySelectorAll(".slideIndicator div");

    slideData.forEach(data => {
        data.style.display = "none";
        $(".slideIndicator div").css({ "display": "inline-block", "border-color": "grey" });
    });

    if (landCounter < 0) {
        landCounter = slideData.length - 1;
        slideData[landCounter].style.display = "block";
        barSlide[landCounter].style.borderColor = "black";
    }
    else {
        slideData[landCounter].style.display = "block";
        barSlide[landCounter].style.borderColor = "black";
    }
};

function slideRight() {
    clearInterval(slideTimer);
    landCounter++
    let slideData = document.querySelectorAll(".main_landing_container");
    let barSlide = document.querySelectorAll(".slideIndicator div");

    slideData.forEach(data => {
        data.style.display = "none";
        $(".slideIndicator div").css({ "display": "inline-block", "border-color": "grey" });
    });

    if (landCounter >= slideData.length) {
        landCounter = 0;
        slideData[landCounter].style.display = "block";
        barSlide[landCounter].style.borderColor = "black";
    }
    else {
        slideData[landCounter].style.display = "block";
        barSlide[landCounter].style.borderColor = "black";
    }
};