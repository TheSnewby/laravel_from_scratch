import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

require('./bootstrap');

document.addEventListener('DOMContentLoaded', () => {
    const el = document.querySelector('.ckeditor');
    if (el) {
        ClassicEditor.create(el).catch((error) => console.error(error));
    }
});
