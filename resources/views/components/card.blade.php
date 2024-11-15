<div class="card {{ implode(' ', $containerClasses) }}">
    @if(isset($header))
        {!! $header !!}
    @else
        <div class="card-header {{ implode(' ', $headerClasses) }}">
            <h3 class="card-title">{{ $title }}</h3>
            @if(isset($toolbar))
                <div class="card-tools">
                    {!! $toolbar !!}
                </div>
            @endif
        </div>
    @endif
    <div class="card-body {{ implode(' ', $bodyClasses) }}"> 
        {{ $slot }}
    </div>
    @if(isset($footer))
        <div class="card-footer"> 
            {!! $footer !!}
        </div>
    @endif
</div>