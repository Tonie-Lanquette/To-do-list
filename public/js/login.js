async function loginAccount(){
    let email = document.querySelector(".emailInput").value;
    let password = document.querySelector(".passwordInput").value;
    

    let informations = {
    email: email,
    password: password,
  };

  let params = {
    method: "POST",
    headers: {
      "Content-Type": "application/json; charset=utf-8",
    },
    body: JSON.stringify(informations),
  };
  
   fetch("/../../login.php", params)
    .then((res) => res.text())
    .then((data) =>{
loginResponse(data)
console.log(data)} );
}

function loginResponse(data){
console.log(data)        
        if(data === "no account matching"){
          let toast = document.querySelector(".toast")
          toast.innerText = data
        }else {
          let main = document.getElementById("main")
          let modalLogin = document.getElementById("modalLogin")
          main.classList.remove("hidden")
          modalLogin.classList.add("hidden")
        }   
}


function creatModal(){
    let creatModal = document.getElementById("creatAccount")
    creatModal.classList.remove("hidden")
}
