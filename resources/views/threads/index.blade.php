@extends('layouts.home')
@section('content')
    <div class="m-5 col-7">
        @foreach ($threads as $thread)
            <div class="shadow-sm p-5 rounded border border-secondary mt-5">
                <div class="d-flex gap-2">
                    <span class="material-symbols-outlined">
                        award_star
                    </span>
                    <h3>{{ $thread->title }}</h3>
                </div>
                <p>detail text</p>
                <span class="p-1 bg-info bg-gradient shadow-sm rounded">{{ $thread->tags }} </span>
            </div>
        @endforeach
    </div>
@endsection()
