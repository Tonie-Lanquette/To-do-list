let container = document.querySelector(".cardsContainer");
let charactersCount = document.querySelector(".charactersCount");
let nav = document.querySelector(".nav");

async function displayCharacters(url) {
  container.innerHTML = "";
  nav.innerHTML = "";

  if (!url) {
    url = "https://rickandmortyapi.com/api/character";
  }

  const reponse = await fetch(url);
  const characters = await reponse.json();
  charactersCount.innerText = `Il y a ${characters.info.count} personnages.`;

  characters.results.map((character) => {
    container.innerHTML += `<div class="card"> <img src=${character.image} class="cardImg"/><p class="text">${character.name}</p> </div>`;
  });

  if (characters.info.prev) {
    createPrevButton(characters.info.prev);
  }
  if (characters.info.next) {
    createNextButton(characters.info.next);
  }
}

displayCharacters();

function createNextButton(url) {
  nav.innerHTML += `<button class="right-0 absolute" onclick="displayCharacters('${url}')">Next</button>`;
}

function createPrevButton(url) {
  nav.innerHTML += `<button class="right-0 absolute" onclick="displayCharacters('${url}')">Prev</button>`;
}
