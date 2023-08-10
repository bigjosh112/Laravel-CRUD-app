@extends('layouts.master');

@section('content')
<div class="row">
    <div class="col-md-6 mb-2">
        @foreach ($posts as $post )
        <x-forms.link :post="$post" />
        @endforeach

</div>

</div>

<x-button>
    Submit
</x-button>
@endsection
