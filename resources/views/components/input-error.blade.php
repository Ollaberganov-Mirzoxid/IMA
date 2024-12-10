@props(['messages', 'prefix'])

@if ($messages)
        @foreach ((array) $messages as $message)
            <p>{{ $prefix }} xato.</p>
        @endforeach
@endif
