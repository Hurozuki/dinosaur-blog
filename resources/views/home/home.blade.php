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

                <span class="d-flex justify-content-center align-items-center rounded-4 bg-success">
                    <img class="w-75 h-75" src="{{ asset('images/thumbnail/icons8-kawaii-dinosaur-48.png') }}" alt="">
                </span>
                <div class="w-75 article-right">
                    <div class="author d-flex align-items-center">
                        <img class="rounded-circle bg-info" src="{{ asset('images/thumbnail/icons8-kawaii-dinosaur-48.png') }}" alt="">
                        <p class="my-0">風呂好き</p>
                        <p class="my-0">13日前</p>
                        <i class="fa-regular fa-heart"></i>
                        <p class="my-0">114</p>
                    </div>
                    <h4>Ark面白すぎな件。そしてテリジノサウルス便利すぎて草</h4>
                </div>
            </a>
        @endfor
    </div>


    <div class="d-lg-flex d-none justify-content-center h-100 right-content">
        <aside class="bg-white h-100">
            
        </aside>
    </div>

</main>



@endsection