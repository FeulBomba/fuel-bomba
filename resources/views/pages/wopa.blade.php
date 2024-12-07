@extends('layouts.app',["activeH"=>"woopa"])

@section('title', 'BOMBA | Woopa')

@section('content')
    <div class="body full-width">
        <div class="sc-eKszNL dcGtXf">
            <img src="/images/degen-bg.aa3d373c992e5e330ed5.png" class="bg">
            <img src="/images/meme-1.e7b9f1c6e7f3e9428947.png" class="meme-1">
            <img src="/images/meme-2.32a3c2ecb8e4650492ad.png" class="meme-2">
            @include('partials.woopa')
        </div>
        <div class="Toastify" id="toast"></div>
        <div class="Toastify" id="message"></div>
    </div>
@endsection