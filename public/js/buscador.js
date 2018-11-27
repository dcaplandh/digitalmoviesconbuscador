window.onload = function(){

  var input = document.querySelector('input[name="search"]');

  input.addEventListener('keypress',function(){
    fetch('http://127.0.0.1:8000/busqueda/'+this.value)
    .then(function(response){
      return response.json();
    })
    .then(function(data){
      console.log(data);
      var lista = document.querySelector('ul#busquedas');
      data = Array.from(data);
      console.log(lista);
      lista.innerHTML = "";
      data.forEach(function(movie){
        lista.innerHTML += "<li>"+movie.title+"</li>"
      });
    })
    .catch(function(error){
      console.log(error);
    });
  });

}
