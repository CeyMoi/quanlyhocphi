<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <script src="{{ asset('js/sc.js')}}"></script>


</head>

<body>
    <!-- @if (Session::has('error'))

    <h1> {{Session::get('error')}} </h1>

    @endif
    
    <form method="post" action="{{ route('process_login') }}">
        {{csrf_field()}}
        Email <input type="email" name="email">
        <br>
        Mật khẩu <input type="password" name="mat_khau">
        <br>
        <button>Đăng nhập</button>



    </form> -->

    @if (Session::has('error'))

    <h1> {{Session::get('error')}} </h1>

    @endif

    <hgroup>
        <h1>Mời bạn đăng nhập</h1>
        <h3>By CeyMoi</h3>
    </hgroup>
    <form method="post" action="{{ route('process_login') }}">
        {{csrf_field()}}
        <div class="group">
            <input type="email" name="email"><span class="highlight"></span><span class="bar"></span>
            <label>Email</label>
        </div>
        <div class="group">
            <input type="password" name="mat_khau"><span class="highlight"></span><span class="bar"></span>
            <label>Mật khẩu</label>
        </div>
        <button class="button buttonBlue">Đăng nhập
            <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
        </button>
    </form>
    <footer><a href="https://github.com/CeyMoi" target="_blank"><img src="https://png2.kisspng.com/sh/f92c87ab35fcea2b98d5e831e0f6ef32/L0KzQYq3UcMxN5J0iJH0aYP2gLBuTfdqfJl6ep9sb33zhcXskr1qa5Dzi591b3fyPcH2kwRiap1qRdDudIfygry0hCJieJluReV4Y3nkfH70hfRqaV5xh9l4LXfshLn8gr1qa5DzRdh7ZXWwf7e0kB9kcZJxRd9uLUXmRYO5U8hlQWFpetg9Lke8QIK8U8kxOWY5UKoDNkm1RYaCU8QveJ9s/kisspng-github-computer-icons-logo-portable-network-graphi-social-media-logo-github-icon-free-of-social-me-5c52238d90dbf4.7901539015488869255934.png"></a>
        <p>About me <a href="https://github.com/CeyMoi" target="_blank">CeyMoi</a></p>
    </footer>
</body>



</html>