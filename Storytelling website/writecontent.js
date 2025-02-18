document.addEventListener('DOMContentLoaded', function() {
    const imageUploadInput = document.getElementById('image-upload');
    const contentTextarea = document.getElementById('content');

    imageUploadInput.addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const imgSrc = e.target.result;
                const imgMarkdown = `![Image](imgSrc)`;
                const cursorPosition = contentTextarea.selectionStart;
                const textBefore = contentTextarea.value.substring(0, cursorPosition);
                const textAfter = contentTextarea.value.substring(cursorPosition, contentTextarea.value.length);
                contentTextarea.value = textBefore + imgMarkdown + textAfter;
            };
            reader.readAsDataURL(file);
        }
    });
});
