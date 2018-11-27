window.onload = function(){

  var input = document.querySelector('input[name="search"]');

  input.addEventListener('keyup',function(){
		
    fetch('/busqueda/'+this.value)
    .then(function(response){
      return response.json();
    })
    .then(function(data){
      var lista = document.querySelector('ul#busquedas');
      data = Array.from(data);
      lista.innerHTML = "";
      data.forEach(function(movie){
        lista.innerHTML += '<li class="list-group-item list-group-item-dark">'+movie.title+'</li>';
      });
    })
    .catch(function(error){
      console.log(error);
    });
  });

}
