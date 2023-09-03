// plain js api
function reloadlanding() {
    location = "home";
}

// jquery

let getlanding;
let getFooter;

$.ajax(
    {
        url: './json/intro.json',
        type: "GET",
        async: false,
        success: function (res) {
            getFooter = res;
        },
        error: function (err) {
            console.log(err);
        }
    });

// 

$.ajax(
    {
        url: './json/landing.json',
        type: "GET",
        async: false,
        success: function (res) {
            getlanding = res;
            $(".appFooter").show();
        },
        beforeSend: function () {
            $("#landing_loader").show().css({ "display": "flex" });
        },
        complete: function () {
            $("#landing_loader").hide();
        },
        error: function (err) {
            console.log(err);
        }
    });


// vue js

if (getID == null) {
    const { createApp, ref } = Vue
    createApp({
        template:
            `
            <section class="page_details">
            <div>
            <h1 id="intro_header">{{introHeader}}</h1>
            <button id="intro_btn" onclick="createAccount(this)">{{introBtn}}</button>
            <p id="intro_para">{{introPara}}</p>
            </div>
            </section>
        
            <section class="app_banner">

            <div id="getData" class="main_landing" v-for="i in loopLanding">
            
            <div class="main_landing_container">
            <h2 class="explore_visitor">Vocations</h2>
            <section class="landing_details vocational">
            <img class="landImg" id="imgVocational" v-bind:src="i.vocational.pics.one" />
            <div>
            <p id="writeUpVocational">
            {{i.vocational.writeUp.one}}
            </p>
            <button onclick="exploreSite(this)">Explore</button>
            </div>
            </section>
            </div>
    
            <div class="main_landing_container">
            <h2 class="explore_visitor">Artisians</h2>
            <section class="landing_details landing_details_middle professional">
            <img class="landImg" id="imgArtisian" v-bind:src="i.artisian.pics.one" />
            <div>
            <p id="writeUpArtisian">
            {{i.artisian.writeUp.one}}
            </p>
            <button onclick="exploreSite(this)">Explore</button>
            </div>
            </section>
            </div>

            <div class="main_landing_container">
            <h2 class="explore_visitor">Professionals</h2>
            <section class="landing_details artisian">
            <img class="landImg" id="imgProfessional" v-bind:src="i.professional.pics.one" />
            <div>
            <p id="writeUpProfessional">
            {{i.professional.writeUp.one}}
            </p>
            <button onclick="exploreSite(this)">Explore</button>
            </div>
            </section>
            </div>

            <section class="main_landing_nav">
            <span onclick="slideLeft(this)">&#10096;</span>
            <span onclick="slideRight(this)">&#10097;</span>
            <b id="slideCounter"></b>
            </section>
            
            </div> 
            
            <aside class="main_aside">
                Video or Slide Animation
            </aside>

            </section>
        
           
    
    `,

        setup() {
            const d = new Date();
            const currentDate = d.getFullYear();
            const introHeader = ref(getFooter.h1);
            const introBtn = ref(getFooter.b1);
            const introPara = ref(getFooter.p1);
            const loopLanding = ref(getlanding);

            return {
                currentDate, introHeader, introBtn, introPara, loopLanding
            }
        }
    },
    ).mount('#mainApp');
}