@props(['id', 'label', 'type', 'name', 'placeholder', 'required' => false, 'readonly' => false])

<div>
    <label for="{{ $id }}" class="block text-xs font-medium text-white pb-2">{{ $label }}</label>
    <div class="flex flex-col items-start">
        <input
            type="{{ $type }}"
            id="{{ $id }}"
            name="{{ $name }}"
            placeholder="{{ $placeholder }}"
            class="relative block w-full appearance-none border border-murky-600 bg-melpa-800 px-3 py-2 text-xs text-white placeholder-murky-200 focus:z-10 focus:border-primary-500 focus:outline-none focus:ring-primary-500 disabled:cursor-not-allowed disabled:opacity-75 rounded-md"
            @if($required) required @endif
            @if($readonly) readonly @endif
        />
    </div>
</div>
