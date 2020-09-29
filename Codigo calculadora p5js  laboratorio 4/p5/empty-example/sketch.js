var numeros = []; //se encuentra las declaraciones del arreglo

/* Variables globales para las variables booleanas o sea variables
que pueden ser true | false  */
var fsuma,fresta,fmulti,fdiv,fraiz;

/* Variables globales para poder mostrar el resultado de las funciones  */
let rdiv,rsuma,rresta,rmulti,rraiz;

/* En la función de setup colocamos las configuraciones básicas de nuestro código*/
function setup() {
/* Declaramos la variable fondo como un canva para poder darle propiedades */
  let fondo = createCanvas(380, 100);
  fondo.position(570,70); /* Como aqui le damos posición  */
  background(0,0,0); /* Color de la canva  */

/* aquí función que pinta por defecto la flecha del inicio
la podemos ver en la parte de abajo de tu codigo */   
  printFlecha(); 

  numeros[0] = ""; 
/* Le asignamos las comitas al arreglo para que el tamaño sea 1 */
  
}

/* Recordemos que la función draw actualiza todo lo que esté en ella cada 60 seg */
function draw() {
/*Con este for voy recorriendo el arreglo y como estamos en la función draw
se va actualizando de manera grafica, es decir, veremos los numero y signos que operemos. */
  for (var i = 0; i < numeros.length; i++) {
  text('  ' + numeros[i], i*30,68); 
  /*Multiplicamos la i para que # no se pinte encima*/
  }

}

/* La funcion leer botón que llamamos al darle a un boton es esta, en el index 
manda a llamar a la funcion con el onclick=""que se encuentra en el index en el codigo de los  números, signos y el botor limpiar*/
function leerBtn(val) {

   if(val==1){  
     /*Si el val es igual a 1 entonces entra importante, creo que esto confunde
     un poco pero tomar en cuenta que si es el primer numero que pones lo primero
     que se ejecuta es lo que esta en el else porque*/
     if(numeros.length>1){
         numeros[numeros.length] = val; 
         /*Con esto asignamos el valor de val a la utima pocision del arreglo*/
         console.log(numeros);
         console.log(numeros.length);
   }else{
     /*Si es el primer 1 que entra a la calcu como dije  al principio esto es lo primero 
     que se ejectuta*/
       numeros[1] = 1;
       console.log(numeros);
       console.log(numeros.length);
    }
  }

  /*Misma historia con todos los numeros */
  if(val==2){
     if(numeros.length>1){
         numeros[numeros.length] = val;
         console.log(numeros);
         console.log(numeros.length);
   }else{
       numeros[1] = 2;
       console.log(numeros);
       console.log(numeros.length);
    }
  }


  if(val==3){
     if(numeros.length>1){
         numeros[numeros.length] = val;
         console.log(numeros);
         console.log(numeros.length);
   }else{
       numeros[1] = 3;
       console.log(numeros);
       console.log(numeros.length);
    }
  }

  if(val==4){
     if(numeros.length>1){
         numeros[numeros.length] = val;
         console.log(numeros);
         console.log(numeros.length);
   }else{
       numeros[1] = 4;
       console.log(numeros);
       console.log(numeros.length);
    }
  }

  if(val==5){
     if(numeros.length>1){
         numeros[numeros.length] = val;
         console.log(numeros);
         console.log(numeros.length);
   }else{
       numeros[1] = 5;
       console.log(numeros);
       console.log(numeros.length);
    }
  }

   if(val==6){
     if(numeros.length>1){
         numeros[numeros.length] = val;
         console.log(numeros);
         console.log(numeros.length);
   }else{
       numeros[1] = 6;
       console.log(numeros);
       console.log(numeros.length);
    }
  }

   if(val==7){
     if(numeros.length>1){
         numeros[numeros.length] = val;
         console.log(numeros);
         console.log(numeros.length);
   }else{
       numeros[1] = 7;
       console.log(numeros);
       console.log(numeros.length);
    }
  }

   if(val==8){
     if(numeros.length>1){
         numeros[numeros.length] = val;
         console.log(numeros);
         console.log(numeros.length);
   }else{
       numeros[1] = 8;
       console.log(numeros);
       console.log(numeros.length);
    }
  }


   if(val==9){
     if(numeros.length>1){
         numeros[numeros.length] = val;
         console.log(numeros);
         console.log(numeros.length);
   }else{
       numeros[1] = 9;
       console.log(numeros);
       console.log(numeros.length);
    }
  }

  if(val==0){
     if(numeros.length>1){
         numeros[numeros.length] = val;
         console.log(numeros);
         console.log(numeros.length);
   }else{
       numeros[1] = 0;
       console.log(numeros);
       console.log(numeros.length);
    }
  }
  /* lo mismo es con los operadores  */
  if(val=='+'){
     if(numeros.length>1){
         numeros[numeros.length] = val;
         console.log(numeros);
         console.log(numeros.length);
   }else{
       numeros[1] = '+';
       console.log(numeros);
       console.log(numeros.length);
    }
  }

  if(val=='-'){
     if(numeros.length>1){
         numeros[numeros.length] = val;
         console.log(numeros);
         console.log(numeros.length);
   }else{
       numeros[1] = '-';
       console.log(numeros);
       console.log(numeros.length);
    }
  }

  if(val=='*'){
     if(numeros.length>1){
         numeros[numeros.length] = val;
         console.log(numeros);
         console.log(numeros.length);
   }else{
       numeros[1] = '*';
       console.log(numeros);
       console.log(numeros.length);
    }
  }

   if(val=='÷'){
     if(numeros.length>1){
         numeros[numeros.length] = val;
         console.log(numeros);
         console.log(numeros.length);
   }else{
       numeros[1] = '÷';
       console.log(numeros);
       console.log(numeros.length);
    }
  }


   if(val=='√'){
     if(numeros.length>1){
         numeros[numeros.length] = val;
         console.log(numeros);
         console.log(numeros.length);
   }else{
       numeros[1] = '√';
       console.log(numeros);
       console.log(numeros.length);
    }
  }

/* La c lo que hace es que limpia el arreglo por completo  */
   if(val=='c'){
     if(numeros.length>1){
        numeros =  []; /* Asi se limpia */
        numeros[0] = ""; /* Pero le tenemos que volver a asignar que existan las 
        comitas en el espacio 0 asi como estaba al principio de todo */
        clear(); /*Con esta funcion limpiamos lo que haya en pantalla */
     printFlecha(); /* Por lo tanto tenemos que volver a pintar la flecha */
   } 
  }


  /*Aqui validamos si apachasmos el boton de igual, de hacerlo pasa lo siguiente...*/
  if(val=='='){
     if(numeros.length>2){
       /* Validamos que en el arreglo haya por lo menos dos espacios ocupados */
       for(i=0; i<numeros.length; i++){
         /* Recorremos tu arreglo para saber que operador hay en la opracion  */
         if(numeros[i]=='+'){
           /*Si encuentra el operador entonces lo pone como verdadero*/
            fsuma = true;
         }else if (numeros[i]=='-') {
           fresta = true;
         }else if(numeros[i]=='*'){
           fmulti = true;
         }else if(numeros[i]=='÷'){
           fdiv = true;
         }else if(numeros[i]=='√'){
          fraiz = true;
        }
       }

       /* Ahora tenemos que decirle que hacer cuando encuentra ese operador
        recordemos que lo que tenemos abajo es lo mismo de decir if (fsuma==true){} */
  if(fsuma){
     //Cadena es otro array
     /* Los splitTokens es una funcion que convierte String 
     en un arreglo, separado por el caracter que le digamos, pero nosostros no 
     traemos un string traemos un arreglo, eso lo solucionamos con .join() 
     que nos convierte a String el arreglo de numeros  */
     let cadena = splitTokens(numeros.join(''), '+');
     console.log(cadena);
     console.log(suma(int(cadena[0]),int(cadena[1])));

     /* Luego  llamamos a las funciones correspondientes si es una suma, resta etc
     y las guradamos en las variables globales que ya habiamos puesto arriba */
     rsuma = suma(int(cadena[0]),int(cadena[1]));
     /* Limipamos el arreglo pero no completamente sino que los llenamos con "" */
     for(i=0; i<numeros.length; i++){
      numeros[i] = "";
      console.log(numeros);
     }
     clear(); /* Limpiamos la pantalla */
     fsuma = false; /* Volvemos a poner la bandera en falso  */
     text(rsuma,40,80); /* Mostramos el resultado */
    
  
  }     

  if(fresta){
     cadena = splitTokens(numeros.join(''), '-');
     console.log(cadena);
     console.log(resta(int(cadena[0]),int(cadena[1])));
     rresta = resta(int(cadena[0]),int(cadena[1]));
     for(i=0; i<numeros.length; i++){
      numeros[i] = "";
      console.log(numeros);
     }
     clear();
     fresta = false;
     text(rresta,40,80);
  }  

  if(fmulti){
     cadena = splitTokens(numeros.join(''), '*');
     console.log(cadena);
     console.log(multi(int(cadena[0]),int(cadena[1])));
     rmulti = multi(int(cadena[0]),int(cadena[1]));
     for(i=0; i<numeros.length; i++){
      numeros[i] = "";
      console.log(numeros);
     }
     clear();
     fmulti = false;
     text(rmulti,40,80);
  }    

   if(fdiv){
     cadena = splitTokens(numeros.join(''), '÷');
     console.log(cadena);
     console.log(div(int(cadena[0]),int(cadena[1])));
     rdiv = div(int(cadena[0]),int(cadena[1]));
     for(i=0; i<numeros.length; i++){
      numeros[i] = "" ;
      console.log(numeros);
     }
     fdiv = false;
     clear();
     text(rdiv,40,80);
  }   
/*Aqui si es un poco diferente ya que no podemos separar los numeros en arrays diferentes
por lo que le decimos que busque el operador de raiz y lo quite, para que cuando
hagamos el split tokens ya solo saques el numero de despues */
if(fraiz){
    for(i=0;i<numeros.length;i++){
        if(numeros[i]=='√'){
          numeros[i] = "";
        }
      }
      cadena = splitTokens(numeros.join(''), '√');
      console.log(cadena);
      rraiz = raiz(float(cadena));
      for(i=0; i<numeros.length; i++){
      numeros[i] = "";
      console.log(numeros);
     }
      clear();
      fraiz = false;
      text(rraiz,40,68);
  }  


    } //fin if arreglo > 3

  } //fin if valor




}
/*Aquí se encuentran las funciones que realizará cada botón de operadores*/

function suma(a, b){
  return a + b;
}

function resta(a, b){
  return a - b;
}

function multi(a,b){
  return a * b;
}

function div(a,b){
  return a/b;
}


function raiz(a){
  return sqrt(a,2);
}

/*Y por último la función que imprime la flecha que vemos al inicio de la calculadora y cuando limpiamos.*/
function printFlecha(){
  textSize(51);
  fill(255,255,255);
  text('⇢',10,67);  
}
