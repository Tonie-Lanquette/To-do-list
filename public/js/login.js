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
        if(data === "No account found"){
          let text = document.getElementById("loginToastText")
          let toast = document.getElementById("loginToast")
          text.innerText = data 
          toast.classList.remove("hidden")
        }
        else if(data==='Some input are empty') 
        {
          let text = document.getElementById("loginToastText")
          let toast = document.getElementById("loginToast")
          text.innerText = data 
          toast.classList.remove("hidden")
        }
        else {
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
