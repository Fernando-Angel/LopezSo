<h1>Contexto de ejecución</h1>
<h2>Entorno Lexico (Lexical environment)</h2>
<p>El entorno lexico es todo aquel entorno que rodea donde esta escrito el codigo, en estos casos un archivo .js el cual es un entorno lexico.  
<br></br>  

<h2>Contexto de ejecución</h2>

<p>Cada vez que iniciamos la ejecucion de una función con esta se genera un nuevo <b>contexto de ejecucion global</b> el cual ayuda a manejar el codigo que se este ejecutando en un momento particular.
<p>Otra forma de decirlo es que <i>cuando el motor de JavaScript ejecuta un script, este crea contextos de ejecución</i>.



***<p> Representación grafica:***

~~~  Javascript
funcion a() {
  console.log("a");
}

funcion b() {
  console.log("b");
  a();
}

b();
~~~ 

<img src="Contexto de ejecucion.png" alt="drawing" width="4000"/>
<br>

<br><h2>Bibliografía:</h2></br>
-  Contexto de ejecución de JavaScript, ICHI.PRO, https://ichi.pro/es/contexto-de-ejecucion-de-javascript-246044099997029 
-  Execution context o el contexto de ejecución de javascript - El Mundo de Angular, Blog Angular, Gustavo Hernan Dohara, - 23 abril, 2018 -, https://gustavodohara.com/blogangular/execution-context-contexto-ejecucion-javascript/
-  JavaScript internals - This y el Contexto de ejecución, DEV Comunnity, Gus Garzaki, - 5 abril 2019 -, https://dev.to/gugadev/javascript-internals-this-y-el-contexto-de-ejecucion-5foj