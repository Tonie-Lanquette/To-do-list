function loginAccount(){
    let email = document.querySelector(".emailInput").value;
    let password = document.querySelector(".passwordInput").value;

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
}


function creatModal(){
    let creatModal = document.getElementById("creatAccount")
    creatModal.style.display = "flex"
}
