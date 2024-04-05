async function handleRegister() {
  let name = document.querySelector(".userName").value;
  let email = document.querySelector(".userEmail").value;
  let password = document.querySelector(".userPassword").value;

  let user = {
    name: name,
    password: password,
    email: email,
  };

  let params = {
    method: "POST",
    headers: {
      "Content-Type": "application/json ; charset=utf-8",
    },
    body: JSON.stringify(user),
  };

  let treatmentCall = fetch("./traitement.php", params);
  let response = await treatmentCall;
  console.log(response);
}

async function addProduct() {
  let name = document.querySelector(".productName").value;
  let price = document.querySelector(".productPrice").value;
  let quantity = document.querySelector(".productQuantity").value;

  let product = {
    name: name,
    price: price,
    quantity: quantity,
  };

  let params = {
    method: "POST",
    headers: {
      "Content-Type": "application/json ; charset=utf-8",
    },
    body: JSON.stringify(product),
  };

  let treatmentCall = fetch("./traitementProduct.php", params);
  let response = await treatmentCall;
  console.log(response);
  getProduct();
}

async function getProduct() {
  let cards = document.querySelector(".cards");
  cards.innerHTML = "";
  let response = await fetch("./getAllProducts.php");
  let products = await response.json();

  products.map((product) => {
    return (cards.innerHTML += ` <div class='rounded-md w-1/3 mx-2 h-20 bg-black text-white my-2 text-center text-sm'><p>${product[1]}</p> <p>${product[2]}€</p><p>${product[3]} produits restant.</p></div>`);
  });
}

async function getAllUsers() {
  let cards = document.querySelector(".cards");
  cards.innerHTML = "";
  let response = await fetch("./getAllUsers.php");
  let users = await response.json();

  users.map((user) => {
    return (cards.innerHTML += ` <div class='rounded-md w-1/3 mx-2 h-20 bg-black text-white my-2 text-center text-sm'><p>${user[1]}</p> <p>${user[2]}€</p><p>${user[3]} produits restant.</p></div>`);
  });
}
