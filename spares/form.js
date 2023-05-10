const form = document.querySelector('form');
const nameInput = document.getElementById('name');
const emailInput = document.getElementById('email');
const phoneInput = document.getElementById('phone');
const dateInput = document.getElementById('date');
const timeInput = document.getElementById('time');

form.addEventListener('submit', (event) => {
    event.preventDefault();

    if (nameInput.value === '' || emailInput.value == '' || phoneInput.value === '' || dateInput.value === '' || timeInput.value === '') {
        alert('Please fill in all fields.');
    } else {
        alert('Appointment booked!');
    }
});