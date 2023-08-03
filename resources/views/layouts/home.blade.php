<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tech.Threads</title>
    <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<style>
    .material-symbols-outlined {
        font-variation-settings:
            'FILL' 1,
            'wght' 400,
            'GRAD' 0,
            'opsz' 48
    }
</style>

<body class="p-5 vh-100">
    <div class="position-relative">
        <div class="position-absolute top-0 end-0 m-4">
            <p>{{ Auth::user()->name }}</p>
        </div>
    </div>
    <div class="bg-white w-100 h-100 shadow-lg rounded d-flex">
        <div class="w-25 h-100 p-5  bg-light">
            <img src="{{ asset('/favicon.ico') }}" class="w-25">
            <div class="d-grid mt-5 gap-3">
                <div class="d-flex gap-3">
                    <span class="material-symbols-outlined">
                        view_list
                    </span>
                    <p class="fs-5 fw-bold">スレッド</p>
                </div>
                <div class="d-flex gap-3">
                    <span class="material-symbols-outlined">
                        notifications
                    </span>
                    <p class="fw-bold fs-5">通知</p>
                </div>
                <div class="d-flex  gap-3">
                    <span class="material-symbols-outlined">
                        account_circle
                    </span>
                    <p class="fw-bold fs-5">プロフィール</p>
                </div>
                <div class="d-flex  gap-3">
                    <span class="material-symbols-outlined">
                        settings
                    </span>
                    <p class="fw-bold fs-5">設定</p>
                </div>
                <div class="d-flex gap-3">
                    <span class="material-symbols-outlined">
                        logout
                    </span>
                    <p class="fw-bold fs-5">ログアウト</p>
                </div>
            </div>
        </div>
        <div data-bs-spy="scroll">
            @yield('content')
        </div>
        @yield('create')

    </div>
    <div class="position-relative">
        <div class="position-absolute bottom-0 end-0 m-4">
            <a href="{{ route('threads.post') }}">
                <button type="button" class="btn btn-info rounded" href="#exampleModalToggle" data-bs-toggle="modal"
                    role="button">
                    <span class="material-symbols-outlined mt-1">
                        add
                    </span>
                </button>
            </a>
        </div>
    </div>
</body>

</html>
