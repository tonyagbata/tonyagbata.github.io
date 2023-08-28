// const { createApp, ref } = Vue

// createApp({
//     setup() {
//         const message = ref('Hello vue!')
//         return {
//             message
//         }
//     }
// }).mount('#app')


const app = Vue.createApp({
    data() {
        return {
            message: "Hello World!"
        }
    }
})

app.mount('#app')

// 
let user = {
    "name": "Geeks for Geeks",
    "age": "23"
}
// Options to be given as parameter
// in fetch for making requests
// other then GET
let options = {
    method: 'POST',
    headers: {
        'Content-Type':
            'application/json;charset=utf-8'
    },
    body: JSON.stringify(user)
}

console.log(user)


// Fake api for making post requests
let fetchRes = fetch(
    "test.json",
    options);
fetchRes.then(res =>
    res.json()).then(d => {
        console.log(d)
    })

// 


async function getFile() {
    let myPromise = new Promise(function (resolve) {
        let req = new XMLHttpRequest();
        req.open('GET', "test.json");
        req.onload = function () {
            if (req.status == 200) {
                resolve(req.response);
            } else {
                resolve("File not Found");
            }
        };
        req.send();
    });
    document.getElementById("demo").innerHTML = await myPromise;
}

getFile();

