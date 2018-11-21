'use strict'

let templateComentarios;

fetch('js/templates/detalleComentarios.handlebars')
.then(response => response.text())
.then(template => {
    templateComentarios = Handlebars.compile(template); // compila y prepara el template
    //console.log(template);
    getComentarios();
});

function getComentarios(){

 fetch(api/comentarios)// en el configApi estaba como detalleProducto ahora puse comentario, creo q tienen q ser estas 2 lienas iguales,y nose si tienen
  //q ser iguales a la ya definida,osea, detalleProducto
 .then(response => response.json())
 .then(jsonComentarios =>{
    mostrarComentarios(jsonComentarios);
  })
}
//jsonComentarios nose de donde sale, en el video es jsonTareas pero tampoco lo entiendo
//sale error de js en la consola del navegador
function mostrarComentarios(jsonComentarios) {
    let context = { // como el assign de smarty
        comentarios: jsonComentarios
    }
    let html = templateComentarios(context);
    document.querySelector("#comentarios-container").innerHTML = html;
    //el comentarios-container acordarse de usarlo con un div con id en el tpl al cual mostar, en nuestro caso seria en detalle producto
}
