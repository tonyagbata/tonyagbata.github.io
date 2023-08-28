
function getTime() {
    let date = new Date();  
let options = {  
    weekday: "short", year: "numeric", month: "short",  
    day: "numeric", hour: "2-digit", minute: "2-digit"  
};
    let currentTime = date.toLocaleTimeString("en-us", options)
    return currentTime
}

function msg() {
    let time = getTime();  

    $("#admin_response").html(
        `
        <div class="adminInput">Good day, <br/>how can I help you? <br/><br/><b style="color:red; font-weight: 400">${time}</b></div>
        `
    )
}

msg();

// 

function getResponder(chat){
    let adminResponse = msgAnswer(chat);
    let time = getTime();
    $("#loadChats").append(
        `
        <p class="chat_admin" id="answer"><div class="adminInput">${adminResponse} <br/><br/><b style="color:red; font-weight: 400">${time}</b></div></p>
        `
    ); 
        
    $("#page_bottom")[0].scrollIntoView({behavior: "smooth"})
}

// 

function getChat(){
    let time = getTime();
    const chat = $("#chat_input").val()

    if(!$("#chat_input").val()==""){
        $("#loadChats").append(
            `
            <p class="chat_user" id="question"><div class="usersInput">${chat} <br/><br/><b style="color:red; font-weight: 400">${time}</b></div></p>
            
            `
        );

        $("#chat_input").val("")
        $("#page_bottom")[0].scrollIntoView({behavior: "smooth"})
    }
    else{
        alert("Please enter your question")
        return
    }

    setTimeout(() => {
       $("#chat_effect").text("typing...")
    }, 1000);

    setTimeout(() => {
        $("#chat_effect").text("")

        getResponder(chat)
    }, 4000);

}

// 

$("#chat_submit").on("click", function(){
    getChat();
});



$("#chat_input").keypress(function (enterKey) {
    if (enterKey.which == 13) {
        getChat();
    }
});

