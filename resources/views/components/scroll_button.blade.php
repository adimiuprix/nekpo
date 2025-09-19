@props(['direction' => 'left'])
<div class="block lg:hidden">
    <button
        id="scroll{{ ucfirst($direction) }}"
        type="button"
        {{ $attributes->merge([
            'class' => 'inline-flex items-center justify-center whitespace-nowrap rounded-md text-xs font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-card text-primary-foreground hover:bg-primary/90 h-9 w-9'
        ]) }}
    >
        @if ($direction === 'left')
        <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="lucide lucide-chevron-left h-4 w-4"
            >
            <path d="m15 18-6-6 6-6"></path>
        </svg>
        @else
        <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="lucide lucide-chevron-right h-4 w-4"
        >
            <path d="m9 18 6-6-6-6"></path>
        </svg>
        @endif
    </button>
</div>