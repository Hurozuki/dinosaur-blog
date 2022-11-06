@extends('layouts.common')
@section('title', 'ジュラ・ラボ')
@section('css')
{{ asset('css/dinosaur.css') }}
@endsection

@section('content') 

<div class="container-fluid bg-base px-md-4 pt-4">
    <main class="row" style="height: 6000px">
        
        <div class="col-xxl-9 col-12 p-0">
            <h1 class="m-5">ティラノサウルス</h1>

            <div class="main-content container-fluid w-100 p-0">
                <div class="row w-100 m-0">
                    <section class="main-image col-lg-6 col-12 p-md-1 p-0">
                        <img class="w-100" src="{{ asset("images/dinosaurs/tyrannosaurus.jpeg") }}">
                    </section>
                    <section class="main-article col-lg-6 col-12 p-md-1 p-0">
                    </section>
                </div>
            </div>

        </div>




        <div class="side-content col-xxl-3 d-xxl-block d-none">

        </div>

    </main>
</div>
@endsection