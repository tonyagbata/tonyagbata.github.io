function msgAnswer(input) {
const openAcc1 = "Please go to upper panel and click create account with plus icon"
const openAcc2 = "Please go to upper panel and click create account with plus icon"
    
    //rock paper scissors
    
    if (input.toLowerCase().match("(create|problem with my account|register|premium)") || input.toUpperCase().match("(create|problem with my account|register|premium)")) {
        return openAcc1;
    } else if (input == "paper") {
        return "scissors";
    } else if (input == "scissors") {
        return "rock";
    }
    else{
        return "Sorry, I can't process your request right now. Contact admin via our official email to resolve this"
    }
}