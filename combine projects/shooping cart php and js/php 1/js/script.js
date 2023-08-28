$('#sort_down').on('click', function(e){
    e.preventDefault()

    $('.selectedRate').show()
    $('#sort_down').hide()
    $('#sort_up').show()
})

$('#sort_up').on('click', function(e){
    e.preventDefault()

    $('.selectedRate').hide()
    $('#sort_down').show()
    $('#sort_up').hide()
})

const log1 = document.getElementById("inputName")
const log2 = document.getElementById("inputDesc")
const log3 = document.getElementById("inputPrice")
let form = document.getElementById("cartUplaod")

form.addEventListener('submit', function(e){

    const productName = log1.value
    const productDescription = log2.value
    const productPrice = log3.value

    if(!log1.value == "" && !log2.value == "" && !log3.value == ""){

    log1.value = "" 
    log2.value = "" 
    log3.value = ""
    }

    else{
        e.preventDefault()
    }
})


