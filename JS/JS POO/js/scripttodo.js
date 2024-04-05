let taskList = document.querySelector(".taskList");

class List {
  constructor(titre, description, date) {
    this.titre = titre;
    this.description = description;
    this.date = date;
  }
}

function creatTask() {
  let titre = document.querySelector(".titre").value;
  let description = document.querySelector(".description").value;
  let date = document.querySelector(".date").value;
  let newToDo = new List(titre, description, date);

  let newTask = `<div><p> ${newToDo.titre}</p><p> ${newToDo.description}</p><p> ${newToDo.date}</p></div>`;
  taskList.innerHTML += newTask;
}
