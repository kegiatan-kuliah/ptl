<form action="{{ $action }}" method="{{ $method }}" class="{{ implode(' ', $classes) }}">
    @csrf
    {{ $slot }}
</form>