const form = document.getElementById('pengaduan');
const button = document.getElementById('btn-pengaduan')

form.addEventListener('submit', function(event) {
    if (this.classList.contains('submitted')) {
        event.preventDefault(); // Prevent form submission if already submitted
        console.log("Hallo")
    } else {
        button.ariaDisabled = true

        this.classList.add('submitted'); // Add 'submitted' class to form
    }
});