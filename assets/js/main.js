const formContainer = document.getElementById('form-container');
const openCreateEntry = document.getElementById('open_create_entry');
const overlay = document.getElementById('overlay');

toggleForm = function() {
    formContainer.classList.toggle('hidden');
}

open_create_entry.addEventListener('click', toggleForm);
overlay.addEventListener('click', toggleForm);
