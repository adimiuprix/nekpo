@props([
    'link' => '',
])

<a
    href="{{ $link }}"
    class="relative z-10 -mb-px flex items-center space-x-2 pt-px text-sm font-medium"
    style="outline: none;"
>
    {{ $icon ?? '' }}
    <span>{{ $slot }}</span>
</a>