@extends('layouts.app',["activeH"=>"premuim"])

@section('title', 'BOMBA | premuim')

@section('content')
    <div class="body full-width">
        <div class="sc-efBctP bWLGrm">
            @include('partials.premuim')
        </div>
        <div class="Toastify" id="toast"></div>
        <div class="Toastify" id="message"></div>
    </div>
@endsection