//                   NOTRE CODE
let n = 1;
let container = document.querySelector(".container");
let studentList = ["Kevin", "Elise", "Antoine", "Antonio"];
let devs = [
  { name: "Nicolas", age: 30, techno: "javascript" },
  { name: "Alice", age: 31, techno: "Java" },
  { name: "Matthieu", age: 34, techno: "Python" },
  { name: "Julie", age: 38, techno: "Java" },
];

window.onload = function boxCreation() {
  while (n <= 100) {
    let box = document.createElement("div");
    box.classList.add("box", "text");
    box.innerHTML = `${n}`;
    container.appendChild(box);
    n++;
  }

  studentList.forEach((name) => {
    let box = document.createElement("div");
    box.classList.add("box", "text");
    box.innerHTML = `${name}`;
    container.appendChild(box);
  });

  devs.forEach((element) => {
    let box = document.createElement("div");
    box.classList.add("box", "text");
    box.innerHTML =
      `<p>${element.name}</p>` +
      `<p>${element.age}</p>` +
      `<p>${element.techno}</p>`;
    container.appendChild(box);
  });
};

//                   CORRECTION

// let container = document.querySelector(".container");

// for (i = 1; i <= 100; i++) {
//   container.innerHTML += `<div class="box"> <p class="text">${i} </p></div>`;
// }
// let studentList = ["Kevin", "Elise", "Antoine", "Antonio"];

// studentList.map(
//   (student) =>
//     (container.innerHTML += `<div class="box"> <p class="text">${student} </p></div>`)
// );

// studentList.forEach(
//   (student) =>
//     (container.innerHTML += `<div class="box"> <p class="text">${student} </p></div>`)
// );

// devs.forEach((dev) => container.innerHTML += `<div class="box"> <p class="text">${dev.name}</p><p class="text">${dev.age}</p> <p class="text">${dev.techno}</p></div>`)

//                      TEST

// let studentList = ["Kevin", "Elise", "Antoine", "Antonio"];
// let listAfficher = studentList.map((test) => {
//   return test;
// });

// console.log(listAfficher);
