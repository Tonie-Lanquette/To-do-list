window.onload = () => {
  let color = localStorage.getItem("savecolor");
  document.querySelector("body").style.backgroundColor = color;
};

function changeColor() {
  let color = document.querySelector("#choice").value;
  let body = document.querySelector("body");

  body.style.backgroundColor = color;

  localStorage.setItem("savecolor", color);
}
