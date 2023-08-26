@extends('layouts.master')


@section('content')
<div>
    <a href="{{route('gretting', 'en')}}" class="btn btn-primary">English</a>
    <a href="{{route('gretting', 'hi')}}" class="btn btn-danger">French</a>
</div>
<div class="">
    <div class="display-3">
        {{__('frontend.heading')}} </div>
        <p>{{__('frontend.paragraph')}}</p>
        <div class="row">
            <ul class="row">
                <li>{{__('frontend.home')}}</li>
                <li>{{__('frontend.about')}}</li>
                <li>{{__('frontend.Container')}}</li>
                <li>{{__('frontend.More')}}</li>
            </ul>
        </div>

</div>

@endsection
