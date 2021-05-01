<h1>Contexto de ejecución</h1>
<h2>Entorno Lexico (Lexical environment)</h2>
<p>El entorno lexico es todo aquel entorno que rodea donde esta escrito el codigo, en estos casos un archivo .js el cual es un entorno lexico.
<h2>Contexto de ejecución</h2>
<p>no


~~~  Javascript
// This is global execution context
var name = 'Mary';

function greetting(name) {
  // This is a greetting function execution context
  return 'hello ' + name;
}

console.log(gretting(name));
~~~ 

