function enlace(){
    var grupoMuscular = document.getElementById('grupoMuscular');
    var gpm = grupoMuscular.options[grupoMuscular.selectedIndex].text;
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "../php/tablas/ejercicio.php?grupoMuscular=" + gpm, true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("ejercicio").innerHTML = xhr.responseText;
        }
    };
    xhr.send();
}
function enlace_comunidad(){
    var tema = document.getElementById('tema');
    array.forEach(tema => {
        prompt(tema);
    });
    prompt(tema);
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "../comunidad/tabla_comunidad.php?tema=" + tema, true);
    xhr.send();
}