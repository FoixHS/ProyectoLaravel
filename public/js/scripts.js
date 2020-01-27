fetch("https://apis.datos.gob.ar/georef/api/provincias")
.then(function(rta){
    return rta.json();
})
.then(function(datos){
    //que hago con lo que llega
    console.log("Son "+ datos.provincias.length +" provincias");
    var selectProvincias = document.querySelector('select[name=provincias]');
    for( var i =0;i < datos.provincias.length; i++){
        console.log(datos.provincias[i].nombre);
        selectProvincias.innerHTML += "<option value='"+datos.provincias[i].nombre+"'>"+datos.provincias[i].nombre+"</option>";
    }

})
.catch(function(error){
    console.log(error);
});
