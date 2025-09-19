@props([
    'category',
    'active' => false,
])

<button
    class="tab-button whitespace-nowrap melpazoom rounded-md px-4 py-2 text-sm text-text-color shadow-xl outline-none duration-300 hover:bg-secondary-500 focus:bg-secondary-500 focus-visible:bg-secondary-500 bg-transparent active"
    id="headlessui-tabs-tab-:{{ $category }}:"
    role="tab"
    type="button"
    aria-selected="{{ $active ? 'true' : 'false' }}"
    tabindex="{{ $active ? '0' : '-1' }}"
    data-headlessui-state="{{ $active ? 'selected' : 'false' }}"
    aria-controls="headlessui-tabs-panel-:{{ $category }}:"
    data-tabs-toggle="#headlessui-tabs-panel-{{ $category }}"
    >
    {{ $slot }}
</button>