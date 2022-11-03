@extends('layouts.common')
@section('title', 'ジュラ・ラボ')
@section('css')
{{ asset('css/home.css') }}
@endsection

@section('content') 


<main class="d-flex bg-theme-back">
    
    <div class="left-content d-xl-flex d-none h-100 px-4">
        <aside>
            <h5>今週のトレンド恐竜</h5>
            <div class="trend-aside list-group">
                @for($i=0; $i<10; $i++)
                    <a class="list-group-item list-group-item-action">ティラノサウルス</a>
                @endfor
            </div>
        </aside>
    </div>


    <div class="main-content d-flex justify-content-center flex-column h-100 bg-gray-100 w-100">
        @for($i=0; $i<=10; $i++)
            <a class="d-flex align-items-center bg-white mb-3 p-4 text-black cur-p text-decoration-none">

                <span class="d-flex justify-content-center align-items-center rounded-4 bg-info">
                    <img class="w-75 h-75" src="{{ asset('images/thumbnail/icons8-ancient-85 (1).png') }}">
                </span>
                <div class="w-75 article-right">
                    <div class="author d-flex align-items-center">
                        <img class="rounded-circle bg-info" src="{{ asset('images/thumbnail/icons8-kawaii-dinosaur-48.png') }}">
                        <p class="my-0">風呂好き</p>
                        <p class="my-0">13日前</p>
                        <i class="fa-regular fa-heart"></i>
                        <p class="my-0">114</p>
                    </div>
                    <h4>HTML/CSS入門〜ゼロからのWEB制作</h4>
                    <div class="tag d-flex">
                        <button class="btn d-flex btn-outline-dark rounded-pill p-1">
                            <img class="rounded-circle bg-info" src="{{ asset('images/thumbnail/icons8-kawaii-dinosaur-48.png') }}">
                            <p class="m-0">ティラノサウルス</p>
                        </button>
                        <button class="btn d-flex btn-outline-dark rounded-pill p-1">
                            <img class="rounded-circle bg-info" src="{{ asset('images/thumbnail/icons8-kawaii-dinosaur-48.png') }}">
                            <p class="m-0">テリジノサウルス</p>
                        </button>
                        <button class="btn d-flex btn-outline-dark rounded-pill p-1">
                            <img class="rounded-circle bg-info" src="{{ asset('images/thumbnail/icons8-kawaii-dinosaur-48.png') }}">
                            <p class="m-0">Ark</p>
                        </button>
                    </div>
                </div>
            </a>
        @endfor
    </div>


    <div class="d-lg-flex d-none justify-content-center right-content px-4">
        <aside class="position-relative bg-white rounded">
            <img class="position-absolute" src="{{ asset('images/drawing.png') }}">
            <div class="trivia-header d-flex flex-column justify-content-center align-items-center rounded-top bg-theme text-white">
                <h5 class="m-0">恐竜</h5>
                <h5 class="m-0">豆知識アイコン</h5>
            </div>
        </aside>
    </div>

</main>




@endsection