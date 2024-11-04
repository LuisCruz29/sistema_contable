
function agregarFila(){
    const cuentaId = document.getElementById('cuenta_id').value;
    const debe = document.getElementById('debe').value;
    const haber = document.getElementById('haber').value;
    const descripcion = document.getElementById('descripcion').value;

    // Validación de campos vacíos
    if (!cuentaId || !debe || !haber || !descripcion) {
        alert('Por favor, completa todos los campos');
        return;
    }

    const table = document.querySelector('table tbody');
    const rows = Array.from(table.querySelectorAll('tr'));

    // Verificar si ya existe una fila con el mismo cuenta_id
    let duplicate = false;
    rows.forEach(row => {
        const existingCuentaId = row.querySelector('input[name="cuenta_ids[]"]').value;
        if (existingCuentaId === cuentaId) {
            duplicate = true;
        }
    });

    if (duplicate) {
        alert('Este ID de cuenta ya ha sido agregado.');
        return;
    }

    // Limitar a un máximo de dos filas en la tabla
    if (rows.length >= 2) {
        alert('Solo puedes agregar un máximo de 2 registros.');
        return;
    }

    // Crear nueva fila y agregar a la tabla
    const newRow = document.createElement('tr');
    newRow.innerHTML = `
        <td><input type="hidden" name="cuenta_ids[]" value="${cuentaId}">${cuentaId}</td>
        <td><input type="hidden" name="debes[]" value="${debe}">${debe}</td>
        <td><input type="hidden" name="haberes[]" value="${haber}">${haber}</td>
        <td><input type="hidden" name="descripciones[]" value="${descripcion}">${descripcion}</td>
        <td><button type="button" onclick="removeRow(this)">Eliminar</button></td>
    `;
    table.appendChild(newRow);

    // Limpiar los campos después de agregar la fila
    document.getElementById('debe').value = '';
    document.getElementById('haber').value = '';
    document.getElementById('descripcion').value = '';
}


function removeRow(button) {
    button.closest('tr').remove();
}