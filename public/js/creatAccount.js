
async function register(){
 
    let lastName = document.querySelector(".lastNameInput").value
    let firstName = document.querySelector(".firstNameInput").value; 
    let creatPassword = document.querySelector(".creatPasswordInput").value;
    let creatEmail = document.querySelector(".creatEmailInput").value;
   

    let creatUser = {
        lastName : lastName,
        firstName: firstName,
        email: creatEmail,
        password: creatPassword,  
  };

  let params = {
    method: "POST",
    headers: {
      "Content-Type": "application/json; charset=utf-8",
    },
    body: JSON.stringify(creatUser),
  };
    

   fetch("../../register.php", params)
    .then((res) => res.text())
    .then((data) => {
        handleFetchResponse(data)
       }).catch((e)=>{
        console.log(e)
       });
}

function handleFetchResponse(data){
console.log(data)        
        if(data === "Email already taken")
        {
          let toast = document.querySelector(".toast")
          toast.innerText = data
        }
        else if(data==='inserted') 
        {
          let creatAccount = document.getElementById("creatAccount")
          creatAccount.classList.add("hidden")
        }  
        else
        {
          let text = document.querySelector(".toast")
          let toast = document.getElementById("creatToast")
          text.innerText = data 
          toast.classList.remove("hidden")
        } 
}


function loginModal(){
    let creatModal = document.getElementById("creatAccount")
    creatModal.classList.add("hidden")}





