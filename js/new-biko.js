document.addEventListener("DOMContentLoaded", function() {
    const counter = (() => {
      const input = document.getElementById('descricao'),
        display = document.getElementById('contador'),
        changeEvent = (evt) => display.innerHTML = evt.target.value.length,
        getInput = () => input.value,
        countEvent = () => input.addEventListener('keyup', changeEvent),
        init = () => countEvent();
  
      return {
        init: init
      }
  
    })();
  
    counter.init();
    
    const next_btn = document.querySelector('.next');
    var status_biko =  1;

    next_btn.addEventListener('click', function () {
      if (status_biko == 1){
        status_biko = 2;
        var imageBar = document.querySelectorAll(".image-bar");
        var categoryBar = document.querySelectorAll(".category-bar");
        var descriptionBar = document.querySelectorAll(".description-bar");
        imageBar.forEach(element => element.classList.toggle("is-active"));
        categoryBar.forEach(element => element.classList.toggle("is-inactive"));
        descriptionBar.forEach(element => element.classList.toggle("is-inactive"));
        
        var descricao = document.querySelectorAll(".descricao-novoBIKO");
        document.getElementById("txtDescricao").innerHTML = "Quer incluir fotos do local? Anexe-as abaixo. Não revele informações do local.";
    } else{
      var imageBar = document.querySelectorAll(".image-bar");
      var addressBar = document.querySelectorAll(".address-bar");
      var submitBtn = document.querySelectorAll(".submit");
      var nextBtn = document.querySelectorAll(".next");
      document.getElementById("txtDescricao").innerHTML = "Agora, inclua as informações do local onde o serviço será prestado.";
      imageBar.forEach(element => element.classList.toggle("is-active"));
      addressBar.forEach(element => element.classList.toggle("is-inactive"));
      submitBtn.forEach(element => element.classList.toggle("is-active"));
      nextBtn.forEach(element => element.classList.toggle("is-active"));
    }
    });
  });