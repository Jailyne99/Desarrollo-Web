$(document).ready(function(){ //carga todo lo que le ponga cuando abro esta hoja de html
  $.ajax({
    url:'php/perfil.php',
    type:'GET',
    success: function(response){
        let list = JSON.parse(response);
        let template='';
        list.forEach(element => {
            template =`
            <img src="./img/${element.foto}" alt="" style="border-radius: 100%; width:40px; height:40px;">
            `
        });
        $('#perfilfoto').html(template);
    }
  });


 });