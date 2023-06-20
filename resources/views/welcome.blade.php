<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/sass/app.scss')
    <title>気ままマーケット | {{config('app.name','laravel')}}</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" ></a>
        </div>
    </nav>
    <div class="conratner-fluid">
        <div class="row">
            <div class="col text-center">
                <h1 style="color:cornflowerblue">気ままマーケット</h1>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
            <div class="card" style="width: 30rem;">
                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                    <a href="{{ route('login') }}" class="btn btn-primary"><h3>ログイン画面</h3></a>
                </div>
                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                    <a href="{{ route('register') }}" class="btn btn-primary">登録画面</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>