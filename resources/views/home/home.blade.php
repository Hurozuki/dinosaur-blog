<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ジュラシック・ラボ</title>
    @vite(['resources/js/app.js'])
    <link href="https://use.fontawesome.com/releases/v6.2.0/css/all.css" rel="stylesheet">

</head>
<style>

    * {
        box-sizing: border-box;
    }

    .h-43 {
        height: 43%;
    }
    nav:first-of-type {
        height: 100px;
    }

    nav:first-of-type > div {
        width: 1100px;
    }
    .main-icon {
        width: 50px;
    }

    .search-form {
        width: 300px;
    }
    .search-form > input {
        outline: none;
    }

    .search-form::before {
        content: "\f002";
        font-family: "FontAwesome";
        margin-left: 3px;
    }

    @media (max-width: 1140px) {
        nav:first-of-type > div {
            width: 100%;
        }
    }


</style>
<body>


    {{-- ヘッダー --}}
<nav class="navbar d-flex align-content-between bg-info px-md-4 px-sm-2 pb-0">

    {{-- top --}}
    <div class="d-flex justify-content-between h-43 mx-auto">
        <img src="images/main_icon.svg" class="main-icon">

        <form action="" class="d-flex form-inline align-items-center bg-white px-2 search-form">
            <input type="search" class="form-control border-0 shadow-none w-100" placeholder="恐竜を検索">
        </form>
    </div>
    
    {{-- buttom --}}
    <div class="h-43 mx-auto">

        <div>
            <button class="btn btn-info text-white h-75" >ホーム</button>
            <button class="btn btn-info text-white h-75" >図鑑</button>
            <button class="btn btn-info text-white h-75" >トレンド</button>
        </div>
        
    </div>
</nav>

    
</body>
</html>