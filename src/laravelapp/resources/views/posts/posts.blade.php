@extends('layouts.app')
@section('content')
    @if(Auth::check())
        <div class="text-center mt-3"> 
            <p class="fw-bold">ビジョンについて語り合おう</p>
        </div>
        <div class="d-flex align-items-center justify-content-center mt-3" >
            <form method="POST" action="{{ route('post.store') }}" class="d-inline-block w-75" enctype="multipart/form-data">
                @csrf
                <textarea class="form-control" name="content" rows="4" style="margin-top: 10px;" placeholder="ポスト"></textarea>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-outline-primary mt-3">ポストする</button>
                </div>
            </form>
        </div>
    @endif

    @foreach($posts as $post)
    <div class="d-flex align-items-center justify-content-center pb-3" >
        <div class="card" style="width: 50rem;">
            <div class="card-body">
                <p class="text-start fw-bold">{{$post->user->name}}</p>
                <p class="text-center">{!! nl2br(e($post->content)) !!}</p>
            </div>
        </div>
    </div>
    @endforeach
@endsection
