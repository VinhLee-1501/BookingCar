@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm  space-y-1']) }}>
        @foreach ((array) $messages as $message)
            <p class="text-danger">{{ $message }}</p>
        @endforeach
    </ul>
@endif
