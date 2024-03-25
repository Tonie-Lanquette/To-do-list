async function addTask(){
 let priority = document.getElementById("priorityTask").value
    let name = document.getElementById("nameTask").value; 
    let category = document.getElementById("categoryTask").value;
    let description = document.getElementById("descriptionTask").value;
   
    let addTask = {
    name:name,
    id_category:category,
    description:description,
    date: Date(),
    // id_user: ,
    id_priority: priority,
    };

    let params = {
    method: "POST",
    headers: {
      "Content-Type": "application/json; charset=utf-8",
    },
    body: JSON.stringify(addTask),
    };

  fetch("../../addTask.php", params)
    .then((res) => res.text())
    .then((data) => {
        handleFetchResponse(data)
       }).catch((e)=>{
        console.log(e)
       });

}

function addResponse(data){
console.log(data)        
        if(data === "error")
        {
          let toast = document.getElementById("taskToast")
          toast.innerText = "Error"
        } 
        else
        {
          let toast = document.querySelector("taskToast")
          toast.innerText = data
        } 
}