@extends('layouts.master')
@section('content')
<x-card title="Title">
    Start creating your amazing application! 

    <x-slot:toolbar>
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
        </button>
    </x-slot:toolbar>

    <x-slot:footer>
        <x-button type="submit">
            test
        </x-button>
    </x-slot:footer>
</x-card>
@endsection