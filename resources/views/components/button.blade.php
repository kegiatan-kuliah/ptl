<button type="{{ $type }}" class="btn btn-{{ $variant === 'outline' ? 'outline-' : '' }}{{ $color }} btn-block">
    {{ $slot }}
</button>
