'use strict'
let arr = window.location.pathname.split('/');
let itemId = arr.slice(-1)[0];
let templateComentarios;

fetch('../js/templates/detalleComentarios.handlebars')
.then(response => {
  //console.log("chau viejo");
  return response.text()
})
.then(template => {
    templateComentarios = Handlebars.compile(template); // compila y prepara el template
    //console.log(templateComentarios);
    getComentarios();
});

function getComentarios(){

 fetch("../api/comentarios/"+itemId)// en el configApi estaba como detalleProducto ahora puse comentario, creo q tienen q ser estas 2 lienas iguales,y nose si tienen
  //q ser iguales a la ya definida,osea, detalleProducto
 .then(response => {
   //console.log(response);
   return response.text()
 })
 .then(jsonComentarios =>{
    mostrarComentarios(jsonComentarios);
    //console.log(jsonComentarios);
  })
}
function setComentarios(){

fetch("../api/comentarios/", {
      method: 'POST',
      //body: JSON.stringify(comentario),
      headers: {
        'Content-Type': 'application/json'
      }
  }).then(res => {
    //console.log(res)
    return res.json();
  })
  .catch(error => console.error('Error:', error));
}
function mostrarComentarios(jsonComentarios) {
    let context = { // como el assign de smarty
        comentarios: jsonComentarios
    }
    let html = templateComentarios(context);
    document.querySelector("#comentarios-container").innerHTML = html;
    //el comentarios-container acordarse de usarlo con un div con id en el tpl al cual mostar, en nuestro caso seria en detalle producto
}
