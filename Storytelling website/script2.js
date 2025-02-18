document.addEventListener('DOMContentLoaded', function() {
    var submitButton = document.querySelector('input[name="submit"]');
    submitButton.addEventListener('click', function() {
        window.location.href = 'writestory.html';
    });
});