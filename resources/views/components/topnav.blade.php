@props([
    'link' => '',
    'active' => false,
])

<a
    href="{{ $link }}"
    {{ $attributes->merge([
       'class' =>
           'relative z-10 -mb-px flex items-center space-x-2 border-b-2 pt-px text-sm font-medium transition-colors duration-200 ease-out ' .
           ($active
               ? 'border-primary-500 text-primary-300'
               : 'border-transparent hover:border-primary-500 hover:text-primary-300')
    ]) }}
    style="outline: none;">
    {{ $icon ?? '' }}
    <span>{{ $slot }}</span>
</a>