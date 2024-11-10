@props([
    'type' => 'text',
    'name' => null,
    'placeholder' => '',
    'required' => true,
    'inputmode' => ''
])

<div class="w-3/4 mx-auto">
    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        value="{{ old($name) }}"
        placeholder="{{ $placeholder }}"
        aria-label="{{ $placeholder }}"
        inputmode="{{ $inputmode }}"
        {{ $required ? 'required' : '' }}
        {{ $attributes->merge(['class' => 'block w-full p-2 border border-gray-400 rounded-xl']) }}
    />

    @error($name)
        <span class="px-2 mt-1 text-sm text-red-500">{{ $message }}</span>
    @enderror
</div>
