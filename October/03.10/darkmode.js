document.addEventListener("DOMContentLoaded", function () {
  const toggleDarkModeButton = document.getElementById("toggle-dark-mode");
  const body = document.body;
  
  // Verifica o tema atual na localStorage (pode ser "light" ou "dark")
  const theme = localStorage.getItem("theme");
  
  // Verifica se o tema é escuro e aplica a classe "dark" ao corpo
  if (theme === "dark") {
      body.classList.add("dark");
  }
  
  // Adiciona um ouvinte de evento de clique ao botão
  toggleDarkModeButton.addEventListener("click", function () {
      // Alterna entre os modos escuro e claro, adicionando ou removendo a classe "dark" no corpo
      body.classList.toggle("dark");
      
      // Salva o tema atual na localStorage
      if (body.classList.contains("dark")) {
          localStorage.setItem("theme", "dark");
      } else {
          localStorage.setItem("theme", "light");
      }
  });
});
