// JavaScript demonstration
function doDemo(button, navbar) {

  /*Navbar
  var navebar = document.getElementById("navebar");
  navebar.style.backgroundColor = "#000000";
  navebar.style.borderColor = "#000000";*/

  //Botão cadastrar
  var cadastrar = document.getElementById("cadastrar");
  cadastrar.style.backgroundColor = "#000000";
  cadastrar.style.borderColor = "#000000";

  button.setAttribute("disabled", "true");
  setTimeout(clearDemo, 2000, button);

  /*navbar.setAttribute("disabled", "true");
  setTimeout(clearDemo, 2000, navbar);*/
}

function clearDemo(button, navbar) {

  /*Navbar
  var navebar = document.getElementById("navebar");
  navebar.style.backgroundColor = "#0d6efd";
  navebar.style.borderColor = "#0d6efd";*/
  

  //Cadastrar
  var cadastrar = document.getElementById("cadastrar");
  cadastrar.style.backgroundColor = "#0d6efd";
  cadastrar.style.borderColor = "#0d6efd";

  button.removeAttribute("disabled");
  //navbar.removeAttribute("disabled");
}
