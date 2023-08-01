<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ログイン - Tech.Treads</title>
    <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
    <div class="position-absolute m-3">
        <img src="{{ asset('images/logo.png') }}" class="w-50">
    </div>
    @if ($errors->any())
        <div class="position-relative">
            <ul class="alert position-absolute top-0 end-0">
                @foreach ($errors->all() as $error)
                    <div class="alert alert-warning " role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="vh-100 d-flex align-items-center justify-content-center" action="{{ route('login') }}" method="post">
        @csrf
        <div class="col-md-4 bg-white p-4 rounded shadow-sm h-auto">

            @yield('content')

        </div>
    </form>
</body>

</html>
