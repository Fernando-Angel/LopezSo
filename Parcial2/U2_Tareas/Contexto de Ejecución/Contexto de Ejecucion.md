<h1>Contexto de ejecución</h1>
<h2>Entorno Lexico (Lexical environment)</h2>
<p>El entorno lexico es todo aquel entorno que rodea donde esta escrito el codigo, en estos casos un archivo .js el cual es un entorno lexico.  
<br></br>  

<h2>Contexto de ejecución</h2>

<p>Cada vez que iniciamos la ejecucion de una función con esta se genera un nuevo <b>contexto de ejecucion global</b> el cual ayuda a manejar el codigo que se este ejecutando en un momento particular.
<p>Otra forma de decirlo es que <i>cuando el motor de JavaScript ejecuta un script, este crea contextos de ejecución</i>.
<br>Cada contexto de ejecucion posee 2 fases las cuales son: <b><i>la fase de creación</i></b> y <b><i>la fase de ejecución</i></b>


<h3> Ejemplo con el cual trabajar: </h3>

~~~  Javascript
let x = 10;

function timesTen(a){
  return a*10;
}

let y = timesTen(x);

console.log(y);
~~~ 

<br><h2>Fase de creación</h2></br>
Durante la fase de creación, se realizan e interpretan tareas de la siguiente manera:
- Crea un objeto global (**windows**) en el navegador o global en Node.js.
- Crea un objeto de vínculo *this* que apunte al objeto global anterior.
- Configura un *monton* de memoria para almacenar variables y referencias de funciones.
- Almacena las declaraciones de funcion y variable en el monton de memoria dentro del <u>contexto de ejecucion global</u> estableciendo los valores iniciales en *undefined*  
Por lo que obtendriamos algo como esto en la pila del contexto de ejecucion global:

<p align="center"> <img src="Pila 1.png" alt="drawing" width="300"/>



<br><h2>Bibliografía:</h2></br>
-  Contexto de ejecución de JavaScript, ICHI.PRO, https://ichi.pro/es/contexto-de-ejecucion-de-javascript-246044099997029 
-  Execution context o el contexto de ejecución de javascript - El Mundo de Angular, Blog Angular, Gustavo Hernan Dohara, - 23 abril, 2018 -, https://gustavodohara.com/blogangular/execution-context-contexto-ejecucion-javascript/
-  JavaScript internals - This y el Contexto de ejecución, DEV Comunnity, Gus Garzaki, - 5 abril 2019 -, https://dev.to/gugadev/javascript-internals-this-y-el-contexto-de-ejecucion-5foj