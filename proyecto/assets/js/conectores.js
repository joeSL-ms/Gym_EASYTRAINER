function enlace(){
    //Variables 
    var grupoMuscular = document.getElementById('grupoMuscular');
    var gpm = grupoMuscular.options[grupoMuscular.selectedIndex].text;

    console.log("Grupo Muscular seleccionado:", gpm); // Debugging. confirmar que se mantiene nuestra eleccion
    var url = "/proyecto/includes/tablas/ejercicio.php?grupoMuscular=" + encodeURIComponent(gpm);

    var xhr = new XMLHttpRequest();
    xhr.open("GET", url, true); // Usar la URL absoluta
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            console.log("Respuesta del servidor:", xhr.responseText); // Mostrar la respuesta del servidor
            document.getElementById("ejercicio").innerHTML = xhr.responseText;
        }
    };

    xhr.send();
}
