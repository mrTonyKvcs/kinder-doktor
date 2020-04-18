require('./bootstrap');

import tinymce from 'tinymce/tinymce';
import 'tinymce/themes/modern/theme';
import 'tinymce/skins/lightgray/skin.min.css';
import 'tinymce/skins/lightgray/content.min.css';

tinymce.init({
    selector: '#mytextarea',
    plugins: 'image',
    toolbar: 'undo redo | formatselect | ' +
    ' bold italic| alignleft aligncenter ' +
    ' alignright alignjustify | bullist numlist outdent indent |' +
    ' removeformat | image code',
    images_upload_url: '/uploads',
    images_upload_handler: function (blobInfo, success, failure) {
        var xhr, formData;
        xhr = new XMLHttpRequest();
        xhr.withCredentials = false;
        xhr.open('POST', '/image-uploads');
        var token = '{{ csrf_token() }}';
        xhr.setRequestHeader("X-CSRF-Token", token);
        xhr.onload = function() {
            var json;
            if (xhr.status != 200) {
                failure('HTTP Error: ' + xhr.status);
                return;
            }
            json = JSON.parse(xhr.responseText);

            if (!json || typeof json.location != 'string') {
                failure('Invalid JSON: ' + xhr.responseText);
                return;
            }
            success(json.location);
        };
        formData = new FormData();
        formData.append('file', blobInfo.blob(), blobInfo.filename());
        xhr.send(formData);
    }
});
