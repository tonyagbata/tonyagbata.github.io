<head>
<style>
body{
    background-image: url(bg/bg66.avif);
    background-position: top;
    background-repeat: no-repeat;
    background-size: cover;
    background-blend-mode:lighten;
  }
  
  main {  
    display: none;
    padding: 1em;
    z-index: 0;
  }

  .features_h2{
    margin: 20px 0px 5px 0px;
    padding: 5px 10px;
    background-image: url(bg/bg31.avif);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;

  }

  .main_content{
    width: 100%;
  }

  .category_list{
    width: 65%;
  }
  
  .buzz_container {
    display: flex;
    gap: 1em;
    position: relative;
  }
  
  .buzz_container .buzz_items {
    position: relative;
    background-position: top;
    background-repeat: no-repeat;
    background-size: cover;
    padding: 1em 2em;
    border: 2px solid rgba(0, 0, 0, .3);
    border-radius: 5px;
    width: 80vw;
    height: 75vh;
    box-shadow: -2px 0px 3px 1px rgba(0, 0, 0, .5);
    margin-right: -15%;
    display: flex;
    flex-direction: column;
    align-items: start;
    gap: 1em;
    /* transition: .3s; */
  }

  .buzz_container .buzz_items:not(:last-child){
    width: 30vw;
  }

  /* .buzz_container .buzz_items:first-child:hover{
    
  } */

.buzz_container .buzz_items:hover ~ .buzz_items{
    transform: translateX(80px) skew(5deg) scale(0.9);
    opacity: 0.8;
    z-index: -1;
    width: 20vw;
    margin-right: -10%;
    font-size: smaller;
}

.buzz_container .buzz_items:hover {
    /* background: whitesmoke !important; */
    /* color: var(--primary-color); */
    width: 80vw;
  }

.buzz_container .buzz_items button {
    background: rgba(0, 0, 0, 0.7);
    color: var(--primary-color);
    padding: .5em 1em; 
    outline: none;
    border: none;
    border-radius: 5px;
    margin-top: auto;
    cursor: pointer;
  }

  .buzz_container .buzz_items button:hover{
    background: rgba(0, 0, 0, 1);
} 
  
  .buzz_container .buzz_items button:active {
    transform: scale(1.1);
}

.banner_items{
  width: 100%;
  min-height: 45vh;
  overflow: hidden;
}

.banner_img{
  position: relative;
  width: 100%;
}

.banner_img p{
  position: absolute;
  width: 100%;
  display: flex;
  justify-content: space-between;
  top: 45%;
  padding: 2px;
}

.banner_img p span{
  background: var(--primary-color);
  border-radius: 50%;
  padding: 0px 6px;
  cursor: pointer;
  font-size: large;
}

.hideBanner{
  border-radius: 5px;
  width: 100%;
  object-fit: contain;
  animation: bannerImgTimer 0.5s ease-in-out;
  /* transition: 5s ease-in-out; */
  box-shadow: 0px 0px 3px 1px;
}

@keyframes bannerImgTimer {
  from{
      transform: translateX(-20%); opacity: 0.1;
  }

  to{
    transform: translateX(0%); opacity: 1;
  }
}
</style>
</head>

<main> 

    <div class="main_content">

        <section class="category_list">
        <div class="buzz_container">
            <div class="buzz_items_api buzz_items page_bg"></div>

            <div class="buzz_items page_bg">
                <h2>Buzz App</h2>
                <p>CSS is fun.</p>
                <button>Read Now</button>
            </div>

            <div class="buzz_items_store buzz_items page_bg"></div>

        </div>
        </section>

    </div>

    <!--  -->

    </main>

<script>
const page_bg = document.querySelectorAll(".page_bg");
page_bg.forEach(bg => {
    bg.style.backgroundImage = "url(bg/bg65.avif)";
    bg.style.backgroundPosition = "top";
    bg.style.backgroundRepeat = "no-repeat";
    bg.style.backgroundSize = "cover";
});

// 

let count = 1;

$(".buzz_items_store").html(
`
<h2>e-Store</h2>
<div class="banner_items"></div>
<button>Read Now</button>
`    
);

$.post('banner.json', function(banner){
    const d = banner[0].store

    $(".banner_items").html(
        `
        <div class="banner_img">
            <p>
            <span class="navLeft" onclick="navLeftBanner(this)">&#10094;</span>
            <span class="navRight" onclick="navRightBanner(this)">&#10095;</span>
            </p>
            <img class="hideBanner" src="store_banner/${d.banner1}" alt="banner">
        </div>

        `
    )
});

// 

function slideBanner(){
    count++
    const ban = $(".hideBanner")[0].src.slice(0, 48)

    if (count <=1) {
        count = 1
     } 
     else {
        $(".hideBanner")[0].src = ban+count+".png"
       
        if (count > 20) {
            count=1
            $(".hideBanner")[0].src = ban+1+".png"
        }
     }
     
}

const stopBanner = setInterval(slideBanner, 5000);

function navRightBanner(goRight) {
    clearInterval(stopBanner)
    count++

    const pic = goRight.parentElement.parentElement
    const pics = pic.getElementsByClassName("hideBanner")[0].src
    
    if (count <= 20) {

        $(".hideBanner")[0].src = pics.slice(0, 48)+count+".png"
    
    } else {
        $(".hideBanner")[0].src = pics.slice(0, 48)+"1.png"
        count = 1
    }
}

function navLeftBanner(goLeft) {
    clearInterval(stopBanner)
    count--

    const pic = goLeft.parentElement.parentElement
    const pics = pic.getElementsByClassName("hideBanner")[0].src
    
    if (count < 1) {
        $(".hideBanner")[0].src = pics.slice(0, 48)+"20.png"
        count = 20
      
    } 
    else {
        $(".hideBanner")[0].src = pics.slice(0, 48)+count+".png"
    }

}

//

</script>