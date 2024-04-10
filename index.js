// Initialization for ES Users
import { Dropdown, Collapse, initMDB } from "mdb-ui-kit";

initMDB({ Dropdown, Collapse });

//Función editar perfil
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById('btn-edit').addEventListener('click', function(e) {
        e.preventDefault();
        var editFields = document.querySelectorAll('#profile-form input[type="text"]');
        editFields.forEach(function(field) {
            field.style.display = 'block'; // Mostrar campos de edición
        });
        var displayFields = document.querySelectorAll('#profile-form p');
        displayFields.forEach(function(field) {
            field.style.display = 'none'; // Ocultar campos de visualización
        });
        this.style.display = 'none'; // Ocultar botón de editar
    });
});