{{--
    Reusable rich text editor scripts. Include once per page (e.g. @section('scripts')) when the page
    has one or more rich editors. Every textarea.rich-editor on the page becomes a TinyMCE editor.
    Usage: <x-rich-editor name="content" :value="$value" /> ... <x-editor-scripts />
--}}
<script src="https://cdn.tiny.cloud/1/0hd25t0ezm8e2ds5cm1fuakbdfper5e2gez5hglgbci68vdi/tinymce/6/tinymce.min.js" referrerpolicy="origin" crossorigin="anonymous"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var uploadUrl = '{{ route(config("editor.upload_route")) }}';
    var csrfToken = document.querySelector('meta[name="csrf-token"]') ? document.querySelector('meta[name="csrf-token"]').getAttribute('content') : '';
    var defaultPlaceholder = {!! json_encode(config('editor.tinymce.placeholder')) !!};

    tinymce.init({
        selector: '{{ config("editor.tinymce.selector", "textarea.rich-editor") }}',
        height: {{ config('editor.tinymce.height', 420) }},
        menubar: false,
        plugins: '{{ config("editor.tinymce.plugins") }}',
        toolbar: '{{ config("editor.tinymce.toolbar") }}',
        content_style: 'body { font-family: "sofia-pro-variable", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif; font-size: 14px; }',
        block_formats: '{{ config("editor.tinymce.block_formats") }}',
        placeholder: defaultPlaceholder,
        branding: false,
        resize: true,
        statusbar: true,
        promotion: false,
        quickbars_selection_toolbar: 'bold italic underline | forecolor backcolor | blockquote removeformat',
        contextmenu: 'link image table | copy paste cut | code',
        automatic_uploads: true,
        images_upload_handler: function (blobInfo, progress) {
            return new Promise(function (resolve, reject) {
                var xhr = new XMLHttpRequest();
                var formData = new FormData();
                formData.append('file', blobInfo.blob(), blobInfo.filename());
                formData.append('_token', csrfToken);
                xhr.open('POST', uploadUrl);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.upload.onprogress = function (e) {
                    if (e.lengthComputable) progress(Math.round((e.loaded / e.total) * 100));
                };
                xhr.onload = function () {
                    if (xhr.status < 200 || xhr.status >= 300) { reject('Upload failed: ' + xhr.status); return; }
                    try { resolve(JSON.parse(xhr.responseText).location); } catch (e) { reject('Invalid response'); }
                };
                xhr.onerror = function () { reject('Network error'); };
                xhr.send(formData);
            });
        },
        image_title: true,
        image_caption: false,
        file_picker_types: 'image',
        file_picker_callback: function (callback, value, meta) {
            if (meta.filetype !== 'image') return;
            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');
            input.onchange = function () {
                var file = this.files[0];
                if (!file) return;
                var formData = new FormData();
                formData.append('file', file);
                formData.append('_token', csrfToken);
                fetch(uploadUrl, { method: 'POST', body: formData, headers: { 'X-Requested-With': 'XMLHttpRequest', 'Accept': 'application/json' } })
                    .then(function (r) { return r.json(); })
                    .then(function (data) { callback(data.location, { alt: file.name }); })
                    .catch(function () { console.error('Image upload failed'); });
            };
            input.click();
        }
    });
});
</script>
