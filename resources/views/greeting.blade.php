@extends('layouts.master')

@section('content')

    <div class="">
        <div class="display-3">{{__('frontend.Welcome to our application!')}}</div>
        <p>{{__('frontend.Localization in Laravel allows you to define translations for various language strings in your application')}}</p>

        <div class="row">
            <ul class="row">
                <li>{{__('frontend.Home')}}</li>
                <li>{{__('frontend.About')}}</li>
                <li>{{__('frontend.Contact')}}</li>
                <li>{{__('frontend.More')}}</li>
            </ul>
        </div>
    </div>
@endsection
