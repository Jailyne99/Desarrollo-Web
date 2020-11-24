
 $(document).ready(function(){ //carga todo lo que le ponga cuando abro esta hoja de html
    console.log(':)');
    $.ajax({
     url:'php/perfil.php',
     type:'GET',
     success: function(response){
         let list = JSON.parse(response);
         let template='';
         list.forEach(element => {
             template =`
             <img src="img/${element.foto}" alt="Foto_perfil" class="img">
             `
         });
         $('#infoperfil').html(template);
     }
   });
    
   $.ajax({
    url:'php/perfil.php',
    type:'GET',
    success: function(response){
        let list = JSON.parse(response);
        let template='';
        list.forEach(element => {
            template =`
            <h4 class="txt-name">${element.nombre} ${element.apellido}</h4>
            <p>${element.descripcion}</p>
             `
        });
        $('#infousuario').html(template);
    }
  });


  $.ajax({
    url:'php/fotosperfil.php',
    type:'GET',
    success: function(response){
        let list = JSON.parse(response);
        let template='';
        list.forEach(element => {
            template +=`
            <div class="col-4" style="float: left;">
             <div class="card border-0 transform-on-hover" >              
                <a class="lightbox" href="img/${element.imagen}"><img src="img/${element.imagen}" class="card-img-top" style="width:100%; height: 300px;"></a>
                <div class="card-body">
                  <h6>${element.nombre}</h6>
                  <p class="text-muted card-text">${element.descripcion}</p>
                  <a type="text" class="btn-editar btn-outline-light">❤️</a>
                  <button onclick="eliminarCarta(${element.id}),location.href='perfil.html'" type="button" class="btn-eliminar btn-outline-light" href="#">Eliminar</button>
                </div>
              </div>
            </div>
             `
        });
        $('#galeria').html(template);
    }
  });

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

 function eliminarCarta(id){
   console.log(id);
      const data={
         id:id
      };
    console.log(data);
    $.post('php/eliminar.php',data,function(response){
        console.log(response);
    });
 }
 