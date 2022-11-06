@extends('layouts.common')
@section('title', 'ジュラ・ラボ')
@section('css')
{{ asset('css/home.css') }}
@endsection

@section('content') 


<main class="d-flex bg-base">
    
    <div class="left-content d-xl-flex d-none flex-column h-100 px-4">
        <aside class="ranking-content">
            <div class="ranking-header">
                <span>
                    <img src="{{ asset("images/egg.png") }}">
                    <h6>トレンド恐竜</h6>
                </span>
                <nav>
                    <button class="unselected-btn">
                        総合
                    </button>
                    <button class="unselected-btn">
                        月間
                    </button>
                    <button class="unselected-btn">
                        週間
                    </button>
                </nav>
            </div>

            <div class="ranking-aside list-group">
                @for($i=0; $i<10; $i++)
                    <a class="list-group-item list-group-item-action">
                        <img class="ranking-icon" src="{{ asset("images/dinosaur-icons/therizinosaurus.png") }}">
                        <span class="ranking-string">
                            <p>テリジノサウルス</p>
                            <p>1592 views</p>
                        </span>
                    </a>
                @endfor
            </div>

        </aside>





        <aside class="ranking-content mt-5">
            <div class="ranking-header">
                <span>
                    <img src="{{ asset("images/boy.png") }}">
                    <h6>トレンドユーザー</h6>
                </span>
                <nav>
                    <button class="unselected-btn">
                        総合
                    </button>
                    <button class="unselected-btn">
                        月間
                    </button>
                    <button class="unselected-btn">
                        週間
                    </button>
                </nav>
            </div>

            <div class="ranking-aside list-group">
                @for($i=0; $i<10; $i++)
                    <a class="list-group-item list-group-item-action">
                        <img class="ranking-icon" src="{{ asset("images/user-icons/earless-seal.png") }}">
                        <span class="ranking-string">
                            <p>風呂好き</p>
                            <p>1592 scores</p>
                        </span>
                    </a>
                @endfor
            </div>

        </aside>
    </div>







    <div class="main-content d-flex justify-content-center flex-column h-100 bg-gray-100 w-100">
        @for($i=0; $i<=10; $i++)
            <a class="d-flex align-items-center justify-content-between position-relative bg-white mb-3 p-3 text-black cur-p text-decoration-none">

                <div class="d-flex justify-content-center align-items-center rounded-4 bg-info">
                    <img class="w-75 h-75" src="{{ asset('images/thumbnails/therizinosaurus.png') }}">
                </div>

                <div class="article-right">
                    <div class="author d-flex align-items-center flex-wrap">
                        <img class="rounded-circle bg-info" src="{{ asset('images/user-icons/earless-seal.png') }}">
                        <p class="my-0">風呂好き</p>
                        <p class="my-0">13日前</p>
                        <i class="fa-regular fa-heart"></i>
                        <p class="m-0">114</p>
                    </div>
                    <h5>認証の転換。世界中の誰もが持っているIDがあった</h5>

                    <div class="tag d-flex flex-wrap">
                        @for($j=0; $j<7; $j++)
                            <button class="btn d-flex align-items-center border border-secondary rounded-pill p-1">
                                <img class="rounded-circle bg-info" src="{{ asset('images/dinosaur-icons/therizinosaurus.png') }}">
                                <p class="m-0">パキケファロ</p>
                            </button>
                        @endfor
                    </div>

                </div>
            </a>
        @endfor
    </div>





    <div class="d-lg-inline-block d-none justify-content-center right-content px-4">
        <aside class="mini-content mb-5">
            <img src="{{ asset('images/mascots/drawing.png') }}">
            <div>
                <h5>恐竜</h5>
                <h5>豆知識</h5>
            </div>

            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus iusto aspernatur sint quaerat, nobis rerum non tenetur perferendis modi vel placeat impedit maiores</p>
            </div>
        </aside>
        

        <aside class="mini-content mb-5">
            <img src="{{ asset('images/mascots/photographer.png') }}">
            <div>
                <h5>Pick Up!</h5>
            </div>

            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus iusto aspernatur sint quaerat, nobis rerum non tenetur perferendis modi vel placeat impedit maiores quidem ipsam, possimus vero enim nam delectus!</p>
            </div>
        </aside>
        

        <aside class="mini-content">
            <img class="end-0" src="{{ asset('images/mascots/think.png') }}">
            <div>
                <h5>恐竜クイズ</h5>
            </div>

            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus iusto aspernatur sint quaerat, nobis rerum non tenetur perferendis modi vel placeat impedit maiores quidem ipsam, possimus vero enim nam delectus!</p>
            </div>
        </aside>
    </div>

</main>




@endsection