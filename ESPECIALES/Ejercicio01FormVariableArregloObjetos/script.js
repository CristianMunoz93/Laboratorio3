
//Click en boton "ENVIAR"
window.onload=function () {
    document.getElementById("enviar").onclick=function () {
        document.getElementById("miFormulario").method = "get";
        document.getElementById("miFormulario").action = "respuestaFormulario.html";  
        document.getElementById("miFormulario").submit();
    }

}


//Creando elementos OPTION para SELECT "FAMILIA DE ARTICULO"
window.onload=function crearOpcion() {
    objFamilias.familias.forEach(function (argValor,argIndice) {
        var objOpcion=document.createElement("option");
        
        objOpcion.setAttribute("className","elementoOpcionSelect");
        objOpcion.setAttribute("value",argValor.descripcion);
        objOpcion.innerHTML = argValor.descripcion;
        document.getElementById("formFamilia").appendChild(objOpcion);
    });
}