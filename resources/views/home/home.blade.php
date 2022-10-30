<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ジュラシック・ラボ</title>
    @vite(['resources/js/app.js'])
    <script src="https://kit.fontawesome.com/a75656e3ce.js" crossorigin="anonymous"></script>

</head>
<style>

    * {
        box-sizing: border-box;
    }

    /* heder */
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



    /* main */
    .right-content > aside {
        width: 250px;
    }

    .left-content {
        width: 250px;
    }

    .left-content aside {
        width: 230px;
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


<main class="bg-light d-flex" style="height: 1000px">
    
    <div class="h-100 bg-danger left-content">
        <aside>
            <h4>今週のトレンド恐竜</h4>
            <ul>
                <li>ティラノサウルス</li>
                <li>モササウルス</li>
                <li>モササウルス</li>
            </ul>
        </aside>
    </div>


    <div class="h-100 bg-gray-100 w-100">
        <article>
            <h2>Ark面白すぎな件。</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia, molestiae deserunt. Voluptas exercitationem nihil maiores sequi similique recusandae repellat, aut laboriosam optio reiciendis, ad velit dolor! Totam ipsum et culpa.</p>
        </article>
    </div>


    <div class="d-lg-flex d-none justify-content-center h-100 right-content">
        <aside class="bg-white h-100">
            
        </aside>
    </div>

</main>


    
</body>
</html>