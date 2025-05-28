@extends('layouts.app')
@section('content')
    <div class="container">
        <p>このサイトはあなたのビジョンをお手伝いするサイトです</p>
    </div>
    @if(Auth::check())
        <div class="scroll-container">
            <div class="scroll-content">
                @foreach(range(1,10) as $i)
                    <img src="/images/door2.jpg" alt="door{{ $i }}">
                @endforeach
            </div>
        </div>
    @else
        <div class="d-flex justify-content-center align-items-center">
            <div class="image"></div>
        </div>
    @endif
@endsection