let numeros = [];


function setup() {
    
  let guardar = createCanvas(windowWidth, windowHeight);
  guardar.background(0,0,0)
  guardar.parent('canva');
    
}

function draw() { //esta funcion se actualiza cada 60seg en 60veces
	for (var i = 0; i < numeros.length; i++) {
		textSize(25);
		fill(90+(i*15), 255,100+(i+15))
		text(numeros[i], 135*(i+1),30);//muestro mi arreglo
		fill(90+(i*15), 255,100+(i+15))
	        //x         y   w   h
		rect(135*(i+1), 40, 35, numeros[i]*(3));
	}
  
}

function aleatorio() { //lista los numeros aleatorios
  clear(); //limpia toda la pantalla
  recuperarCanva(); //recupera la canva limpiada

 for (var i = 0; i < 10; i++) { 
 	numeros[i] = int(random(1, 100))  //que cada posicion de i se repita 10 veces,
  }
 
  console.log(numeros)
}

async function ordenarAuto(){ //

let i, j, temp;
//metodo burbuja ..............................................
	for(i=1;i<10;i++){
			for(j=0;j<10;j++){
				if(numeros[j]>numeros[j+1]){
				    temp = numeros[j]; 
				    numeros[j] = numeros[j+1];
				    numeros[j+1] = temp;

		        }

	        }
	       clear();
           recuperarCanva();
	       await sleep(1000);

        }
        console.log(numeros);
 }

function mayormenor(){
	let i, j, temp;
//metodo burbuja de menor a mayor ..............................................
	for(i=1;i<10;i++){
			for(j=0;j<10;j++){
				if(numeros[j]<numeros[j+1]){
				    temp = numeros[j]; 
				    numeros[j] = numeros[j+1];
				    numeros[j+1] = temp;

		        }

	        }
	       clear();
           recuperarCanva();
	       
        }
        console.log(numeros);
}

function menormayor(){
	let i, j, temp;
//metodo burbuja de mayor a menor ..............................................
	for(i=1;i<10;i++){
			for(j=0;j<10;j++){
				if(numeros[j]>numeros[j+1]){
				    temp = numeros[j]; 
				    numeros[j] = numeros[j+1];
				    numeros[j+1] = temp;

		        }

	        }
	       clear();
           recuperarCanva();
	       
        }
        console.log(numeros);
}

function recuperarCanva(){
    
  let guardar = createCanvas(windowWidth, windowHeight);
  fill(144, 240, 92)
  guardar.background(0,0,0)
  guardar.parent('canva');
  
}

function sleep(ms) {
  return new Promise(
    resolve => setTimeout(resolve, ms)
  );
}