{{-- Reusable rich text editor (TinyMCE). Use with <x-editor-scripts /> once per page. Supports multiple editors per page when each has a unique id/name. --}}
@props([
    'name' => 'content',
    'id' => null,
    'value' => '',
    'placeholder' => null,
    'height' => null,
    'required' => false,
    'disabled' => false,
    'error' => null,
])

@php
    $id = $id ?? $name;
    $placeholder = $placeholder ?? config('editor.tinymce.placeholder', 'Start typing…');
    $height = $height ?? config('editor.tinymce.height', 420);
@endphp

<div class="rich-editor-wrapper" data-editor-for="{{ $id }}">
    <textarea
        {{ $attributes->merge([
            'class' => 'form-control rich-editor ' . ($error ? 'is-invalid' : ''),
            'id' => $id,
            'name' => $name,
            'rows' => 12,
            'data-placeholder' => $placeholder,
            'data-height' => $height,
        ]) }}
        @if($required) required @endif
        @if($disabled) disabled @endif
    >{{ $value }}</textarea>
    @if($error)
        <span class="invalid-feedback d-block">{{ $error }}</span>
    @endif
</div>
