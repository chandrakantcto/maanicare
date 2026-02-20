<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Rich text editor (TinyMCE)
    |--------------------------------------------------------------------------
    | Used project-wide for content fields. Supports multiple editors per page.
    */

    'tinymce' => [
        'api_key' => env('TINYMCE_API_KEY', config('services.tinymce.api_key', 'no-api-key')),
        'selector' => 'textarea.rich-editor',
        'height' => 420,
        'placeholder' => 'Start typing… You can paste or upload images anywhere in the content.',
        'plugins' => 'lists link image table code charmap anchor searchreplace visualblocks wordcount autoresize fullscreen quickbars advlist',
        'toolbar' => 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image table | blockquote hr | charmap code removeformat | fullscreen',
        'block_formats' => 'Paragraph=p; Heading 1=h1; Heading 2=h2; Heading 3=h3; Heading 4=h4; Quote=blockquote; Preformatted=pre; Code=pre; Small=small',
    ],

    /*
    |--------------------------------------------------------------------------
    | Image upload (for editor inline images)
    |--------------------------------------------------------------------------
    | Route name for POST upload. Must return JSON: { "location": "full-image-url" }
    */

    'upload_route' => env('EDITOR_UPLOAD_ROUTE', 'admin.editor.upload-image'),

];
