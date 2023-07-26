<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
    <form class="vh-100 d-flex align-items-center justify-content-center" action="{{ route('login') }}" method="post">
        @csrf
        <div class="col-md-4 bg-white p-4 rounded shadow-sm h-auto">
            <h1 class="fw-bold mb-3">ログイン</h1>
            <div class="d-grid gap-3 mb-5">
                <div>
                    <label for="exampleFormControlInput1" class="form-label">メールアドレス</label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                        placeholder="name@example.com" value="{{ old('email') }}">
                </div>
                <div>
                    <label for="exampleFormControlInput1" class="form-label">パスワード</label>
                    <input type="password" name="password" class="form-control" id="exampleFormControlInput2"
                        placeholder="password">
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <a href="{{ route('register') }}"> <button type="button" class="btn btn-link">会員登録</button></a>
                <nav class="float-end">
                    <a href="{{ route('login') }}"><button type="submit" class="btn btn-primary">ログインする</button></a>
                </nav>
            </div>
        </div>
    </form>
</body>

</html>
