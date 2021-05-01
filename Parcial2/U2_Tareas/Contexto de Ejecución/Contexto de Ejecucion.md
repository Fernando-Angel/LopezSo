<h1>Contexto de ejecución</h1>
<h2>Entorno Lexico (Lexical environment)</h2>
<p>El entorno lexico es todo aquel entorno que rodea donde esta escrito el codigo, en estos casos un archivo .js el cual es un entorno lexico.  
<br></br>  

<h2>Contexto de ejecución</h2>

<p>Cada vez que iniciamos la ejecucion de una función con esta se genera un nuevo <b>contexto de ejecucion global</b> el cual ayuda a manejar el codigo que se este ejecutando en un momento particular.
<p>Otra forma de decirlo es que <i>cuando el motor de JavaScript ejecuta un script, este crea contextos de ejecución</i>.
<br>Cada contexto de ejecucion posee 2 fases las cuales son: <b><i>la fase de creación</i></b> y <b><i>la fase de ejecución</i></b>


<h3> Ejemplo con el cual se trabajará: </h3>

~~~  Javascript
let x = 10;

function timesTen(a){
  return a*10;
}

let y = timesTen(x);

console.log(y);
~~~ 

<br><h2>Fase de creación</h2>
Durante la fase de creación, se realizan e interpretan tareas de la siguiente manera:
- Crea un objeto global (<span style="background-color: #f3e2d6; color:red">*windows*</span>) en el navegador o <span style="background-color: #f3e2d6; color:red">*global*</span> en Node.js.
- Crea un objeto de vínculo *<span style="background-color: #f3e2d6; color:red">*this*</span>* que apunte al objeto global anterior.
- Configura un *monton* de memoria para almacenar variables y referencias de funciones.
- Almacena las declaraciones de funcion y variable en el monton de memoria dentro del <u>contexto de ejecucion global</u> estableciendo los valores iniciales en <span style="background-color: #f3e2d6; color:red">*undefined*</span>  
Por lo que obtendriamos algo como esto en la pila del contexto de ejecucion global:

<p align="center"> <img src="Imagenes/Pila 1.png" alt="drawing" width="300"/>

<br><h2>Fase de ejecución</h2>
Durante esta fase el motor JavaScript ejecuta el código línea por línea. En esta fase se asignan valores a las variables y se realiza las llamadas de función.
<br> En la imagen podemos apreciar que los valores que anteriormente estaban marcados como indefinidos ahora poseen el valor asignado en el script.
<p align="center"> <img src="Imagenes/Pila 2.png" alt="drawing" width="300"/>

<br><b><h2>Contexto de ejecución de roles</h2></b>
Para cada llamada de función, el motor JavaScript crea un nuevo <u>contexto de ejecución de función</u>.
<br> Este contexto de ejecución de la función es similar al contexto de ejecución global, solo que en lugar de crear el objeto <span style="background-color: #f3e2d6; color:red">*global*</span>, se crea el objeto <span style="background-color: #f3e2d6; color:red">*arguments*</span> el cual contiene una referencia a todos los parámetros de la función:

<p align="center"> <img src="Imagenes/Pila 3.png" alt="drawing" width="300"/>

<br>En el ejemplo utilizado podemos ver que el contexto de ejecución de la función crea el objeto <span style="background-color: #f3e2d6; color:red">*arguments*</span> que hace referencia a todos los parámetros pasados a la función, se establece este valor en el objeto global e inicializa el parametro <span style="background-color: #f3e2d6; color:red">*a*</span> como <span style="background-color: #f3e2d6; color:red">*undefined*</span>
<br>
<br> Durante la fase de ejecución del contexto de ejecución de función, <span style="background-color: #f3e2d6; color:red">*10*</span> el parámetro se asigna en <span style="background-color: #f3e2d6; color:red">*a*</span> y devuelve el resultado <span style="background-color: #f3e2d6; color:red">*100*</span> al contexto de ejecución global:

<p align="center"> <img src="Imagenes/Pila 4.png" alt="drawing" width="300"/>

<br>De esta forma, definiriamos las variables en **la Fase de Creación** y asignariamos los valores a la variable en **la fase de ejecución** del **Contexto de Ejecución**.

<br><h2>***This***</h2>
Esta propiedas es usada en el contexto de ejecución (global, funcional o eval) que, en modo no escrito, siempre hace referencia a un objeto y en modo estricto puede ser cualquier valor por lo que su valor **dependerá de cómo es ejecutada la funcion** en donde se encuentra. Escenarios comunes:

-  **Dentro de una función**. Cuando la función no es parte del prototipo de una función constructora, el valor de this será igual al objeto window.
-  **Dentro de un método**. Cuando se usa this dentro de un   método, el valor de this será equivalente al elemento en el que se ejecuta al método
-  **Dentro de un constructor o método**. This siempre hará referencia a la instancia

<br><h2>***Hoisting***</h2>
Este sirve para identificar el proceso de colocar las declaracciones de variables y funciones en memoria dentro de un ***contexto de ejecución***; Todas las declaraciones se ponen en memoria en la parte más alta del stack.
<br> El Hoisting solo mueve las declaraciones de variables, **mas no las inicializa**.


<br><h2>Bibliografía:</h2>
-  Contexto de ejecución de JavaScript, ICHI.PRO, https://ichi.pro/es/contexto-de-ejecucion-de-javascript-246044099997029 
-  Execution context o el contexto de ejecución de javascript -  El Mundo de Angular, Blog Angular, Gustavo Hernan Dohara, -  23 abril, 2018 -, https://gustavodohara.com/blogangular/execution-context-contexto-ejecucion-javascript/
-  JavaScript internals - This y el Contexto de ejecución, DEV Comunnity, Gus Garzaki, - 5 abril 2019 -, https://dev.to/gugadev/javascript-internals-this-y-el-contexto-de-ejecucion-5foj
-  this, JavaScript | MDN, https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/this
-  Entendiendo el hoisting, DEV Community, Gus Garzaki, - 7 abril 2019 -, https://dev.to/gugadev/entendiendo-el-hoisting-27af