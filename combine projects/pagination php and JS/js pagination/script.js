const taskList = document.querySelector(".task_list");

const first = document.querySelector(".first");
const previous = document.querySelector(".previous");
const next = document.querySelector(".next");
const last = document.querySelector(".last");

let arrayList = [];

let page = 0;

for(let i=1; i<=100; i++){
    let li = document.createElement("li");
    li.textContent = `List item ${i}`; //here takes in the html params
    arrayList.push(li);
}

for(let i=0; i<page + 10; i++){
    taskList.appendChild(arrayList[i]);
}

next.addEventListener("click", ()=>{
   page ==  arrayList.length - 10 ? (page = 10) : (page += 10);
   taskList.innerHTML = "";
   for(let i=page; i < page + 10; i++){
    taskList.appendChild(arrayList[i]);  
   }
})

previous.addEventListener("click", ()=>{
    page == 0 ? (page = arrayList.length - 10) : (page -= 10);
    taskList.innerHTML = "";
    for(let i=page; i <page + 10; i++){
     taskList.appendChild(arrayList[i]);   
    }
 })

 first.addEventListener("click", ()=>{
    page = 0;

    taskList.innerHTML = "";
    for(let i=page; i <page + 10; i++){
     taskList.appendChild(arrayList[i]);   
    }
 })

 last.addEventListener("click", ()=>{
    page =arrayList.length - 10; 
    taskList.innerHTML = "";
    for(let i=page; i <page + 10; i++){
     taskList.appendChild(arrayList[i]);    
    }
 })
// console.log(arrayList)