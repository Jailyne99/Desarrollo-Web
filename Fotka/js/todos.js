$(document).ready(function() {
    console.log('JQuery works!');


    $.ajax({
		url: 'php/todos.php',
		type:'GET',
		success: function(response){
			let list = JSON.parse(response);
			let template = '';
			list.forEach(lists => {
                template += `
            <div class="carousel-item">
            <input type="text" value="${lists.id}" hidden >
                <img src="img/${lists.perfil}" alt="People" class="carousel-item__img">
                <div class="carousel-item__details">
                    <div>
                        <button type="button" class="btn" onclick="location.href='perfil.html'"></button>                                              
                    </div>
                    <p class="carousel-item__details--title">${lists.nombre}</p>
                </div>                
            </div>
                `
            });
			$('#carru').html(template);
		}
    });


    $('#search').keyup(function(){
        let search =  $('#search').val();
        console.log(search);
        $.ajax({
            url: 'php/busqueda.php', 
            type: 'POST', 
            data: { search },
            success: function(response){
                let clients =  JSON.parse(response);
                let template = '';
                clients.forEach(client =>{
                    template += `
                    <div class="carousel-item" style="border: 15px solid #399ED2;">
                        <input type="text" value="${client.id}" hidden >
                        <img src="img/${client.perfil}" alt="People" class="carousel-item__img">
                        <div class="carousel-item__details">
                            <div>
                                <button type="button" class="btn"></button>                                              
                            </div>
                            <p class="carousel-item__details--title">${client.nombre}</p>
                        </div>                
                    </div>
                    `
                });
                $('#busqueda').html(template);
            }
        })
        
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