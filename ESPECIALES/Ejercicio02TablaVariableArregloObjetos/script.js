//CARGAR DATOS
window.onload=function(){
    document.getElementById("botonCargar").onclick=function(){
    
        objArticulos.articulos.forEach(function (argValor,argIndice){
            var objTr = document.createElement("tr");
            //Codigo Articulo
            var objTd = document.createElement("td");
    
            objTd.setAttribute("campo-dato","articulo_codArt");
            objTd.innerHTML=argValor.codArt;
            objTr.appendChild(objTd);
    
            //Familia
            var objTd = document.createElement("td");
    
            objTd.setAttribute("campo-dato","articulo_familia");
            objTd.innerHTML=argValor.familia;
            objTr.appendChild(objTd);
    
            //UM
            var objTd = document.createElement("td");
    
            objTd.setAttribute("campo-dato","articulo_um");
            objTd.innerHTML=argValor.um;
            objTr.appendChild(objTd);
    
            //Descripcion
            var objTd = document.createElement("td");
    
            objTd.setAttribute("campo-dato","articulo_descripcion");
            objTd.innerHTML=argValor.descripcion;
            objTr.appendChild(objTd);
    
            //Fecha Alta
            var objTd = document.createElement("td");
    
            objTd.setAttribute("campo-dato","articulo_fecAlta");
            objTd.innerHTML=argValor.fecAlta;
            objTr.appendChild(objTd);
    
            //Saldo Stock
            var objTd = document.createElement("td");
            objTd.setAttribute("campo-dato","articulo_saldoStock");
            objTd.innerHTML=argValor.saldoStock;
            objTr.appendChild(objTd);
            
            
            document.getElementById("tablaDatos").appendChild(objTr);
        });
    }
}
