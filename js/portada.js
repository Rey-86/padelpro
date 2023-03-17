window.onload = () => {
    let fecha = document.getElementById("fecha");
   
    fecha.onchange = () => {
        let fechaSeleccionada = fecha.value;
        let pista = document.getElementById("pista").value;
        let turno = document.getElementById("turno").value;
        let url = "ajax.php?fecha=" + fechaSeleccionada+"&pista="+pista;
        fetch(url)
            .then(data => data.json())
            .then(data => {
                let turnos = data;
                let options = "<option value='none'>---</option>";
                for (let index = 0; index < turnos.length; index++) {
                    options += `<option value=${turnos[index].id}>${turnos[index].turno}</option>`;
  
                }
                document.getElementById("turno").innerHTML = options;
            })
            .catch(err => {
                console.log(err);
        })
        
    }
}
