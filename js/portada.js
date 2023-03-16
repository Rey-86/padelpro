window.onload = () => {
    let fecha = document.getElementById("fecha");
    let pista = document.getElementById("pista").value;
    let turno = document.getElementById("turno").value;
    fecha.onchange = () => {
        let fechaSeleccionada = fecha.value;
        let turnoSeleccionado = turno.value;
        let url = "ajax.php?fecha=" + fechaSeleccionada+"&pista="+pista+"&turno"+turno;
        fetch(url)
            .then(data => data.text())
            .then(data => {
                console.log(data);
            })
            .catch(err => {
                console.log(err);
        })
        
    }
}
