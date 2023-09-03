// jquerry

$("#search_container").on('submit', (e) => {
    e.preventDefault();
    if ($("#search_input").val() == "") {
        return
    }
    else {
        location = "home?id=search&desc=" + $("#search_input").val()
    }
});

// 
function exploreSite(e) {
    let p = e.parentElement.parentElement.parentElement;
    let visit = p.getElementsByClassName("explore_visitor")[0];
    location = "home?id=page&desc=" + visit.innerText
};

function createAccount(b) {
    if (b.innerText == "Sign in") {
        location = "home?id=account&desc=sign_in";
    }
    else if (b.innerText == "Join Now" || b.innerText == "Sign up") {
        location = "home?id=account&desc=sign_up";
    }
};