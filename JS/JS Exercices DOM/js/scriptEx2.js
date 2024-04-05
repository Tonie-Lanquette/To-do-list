let colors = Array(
  "red",
  "purple",
  "blue",
  "rgba(234,159,44)",
  "rgba(147,235,116)",
  "#EB5D2D",
  "#73EBAA"
);

let btnColors = document.querySelector("#btnColors");

btnColors.addEventListener("click", getRandomColorFromSelection);

// function getRandomNumber() {
//   let random = colors[Math.floor(Math.random() * (0, 7))];
//   let body = document.body;
//   body.style.background = random;
//   return random;
// }

function getRandomNumber() {
  let random = colors[Math.floor(Math.random() * (0, colors.length))];
  return random;
}

function getRandomColorFromSelection() {
  let selectedColor = getRandomNumber();
  let body = document.body;
  body.style.backgroundColor = selectedColor;
  let text = document.querySelector(".color");
  text.innerHTML = selectedColor;
}

let hex = Array(
  "1",
  "2",
  "3",
  "4",
  "5",
  "6",
  "7",
  "8",
  "9",
  "A",
  "B",
  "C",
  "D",
  "E",
  "F"
);

let btnHex = document.querySelector("#btnHex");
btnHex.addEventListener("click", getRandomHexFromSelection);

function getRandomHexColor() {
  let hexName = "#";
  for (i = 0; i < 6; i++) {
    hexName += hex[Math.floor(Math.random() * (0, hex.length))];
  }
  return hexName;
}

function getRandomHexFromSelection() {
  let selectHex = getRandomHexColor();
  let body = document.body;
  body.style.backgroundColor = selectHex;
  let textHex = document.querySelector(".color");
  textHex.innerHTML = selectHex;
}

// Correction

//  let possibleColors = ["#14213D", "#000", "blue", "red", "green"];
//  let hexadecimalPossibilities = [
//    0,
//    1,
//    2,
//    3,
//    4,
//    5,
//    6,
//    7,
//    8,
//    9,
//    "A",
//    "B",
//    "C",
//    "D",
//    "E",
//    "F",
//  ];

//  let colorLabel = document.querySelector(".color");
//  let btnColor = document.querySelector("#btnColors");
//  let btnHex = document.querySelector("#btnHex");
//  let body = document.body;

//  btnHex.addEventListener("click", createHexColor);
//  btnColor.addEventListener("click", getRandomColorFromSelection);

//  function getRandomNumber(givenArray) {
//    let x = Math.floor(Math.random() * givenArray.length);

//    return x;
//  }

//  function getRandomColorFromSelection() {
//    let color = possibleColors[getRandomNumber(possibleColors)];
//    body.style.backgroundColor = color;
//    colorLabel.innerText = color;
//  }

//  function createHexColor() {
//    if (!hexadecimalPossibilities) {
//      return "Je mets fin à cette fonction";
//    }

//    let hexColor = "#";

//    for (i = 1; i <= 6; i++) {
//      hexColor +=
//        hexadecimalPossibilities[getRandomNumber(hexadecimalPossibilities)];
//    }

//    body.style.backgroundColor = hexColor;
//    colorLabel.innerText = hexColor;
//  }

//  createHexColor();
