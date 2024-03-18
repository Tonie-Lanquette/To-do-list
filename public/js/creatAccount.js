function creatAccount(){
    let lastName = document.querySelector(".lastNameInput");
    let firstName = document.querySelector(".firstNameInput");
    let creatEmail = document.querySelector(".creatEmailInput");
    let creatPassword = document.querySelector(".creatPasswordInput");
    let creatConfirmationPassword = document.querySelector(".creatConfirmationPasswordInput");

    let emailCrendentials = {
        lastName : lastName,
        firstName: firstName,
        email: creatEmail,
        password: creatPassword,
        confirmationPassword: creatConfirmationPassword,
  };

  let params = {
    method: "POST",
    headers: {
      "Content-Type": "application/json; charset=utf-8",
    },
    body: JSON.stringify(emailCrendentials),
  };
}


function loginModal(){
    let creatModal = document.getElementById("creatAccount")
    creatModal.style.display = "none"
}




