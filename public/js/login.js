function loginAccount(){
    let email = document.querySelector(".emailInput").value;
    let password = document.querySelector(".passwordInput").value;
    let main = document.getElementById("main")

    let emailCrendentials = {
    email: email,
    password: password,
  };

  let params = {
    method: "POST",
    headers: {
      "Content-Type": "application/json; charset=utf-8",
    },
    body: JSON.stringify(emailCrendentials),
  };
  
   fetch("./login.php", params)
    .then((res) => res.text())
    .then((data) => console.log(data));
}


function creatModal(){
    let creatModal = document.getElementById("creatAccount")
    creatModal.style.display = "flex"
}
