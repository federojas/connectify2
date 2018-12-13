window.addEventListener("load", function() {
  console.log('llegue');
  var campoPaises = document.querySelector('select[name=pais]');

  fetch('https://restcountries.eu/rest/v2/all')
    .then(function(response) {
      return response.json();
    })
    .then(function(paises) {
      for (pais of paises) {
        var option = document.createElement('option');
        var optionText = document.createTextNode(pais.name);
        option.append(optionText);
        campoPaises.append(option);
      }
    })
    .catch(function(error) {
        console.error(error);
    })
});
