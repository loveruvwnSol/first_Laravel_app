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

<body class="vh-100 d-flex align-items-center justify-content-center">
    <div class="col-md-4 bg-white p-4 rounded shadow-sm h-auto">
        <h1 class="fw-bold mb-3">こんにちは {{ Auth::user()->name }}さん</h1>
    </div>
</body>

</html>
