@extends('layouts.app')


@section('content')

<div class="banner py-4 bg-primary text-white mb-5">
    <div class="container">
        <h1>News</h1>
    </div>
</div>

{{--

<!-- <section class="posts py-5">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
            @if(count($posts) > 0)

            @foreach($posts as $post)
            <div class="col">
                <div class="card text-left h-100">
                    <img class="card-img-top" src="https://picsum.photos/400/200" alt="">
                    <div class="card-body">
                        <h4 class="card-title">{{$post['title']}}</h4>
<p class="card-text">{{$post['author']}}</p>
</div>
</div>
</div>


@endforeach
@else
<div class="col">
    <p>Sorry, we still have to write something! 😢</p>
</div>


@endif
</div>
</div>
</section> -->
--}}



<section class="posts py-5">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">

            @forelse($posts as $i => $post)
            <div class="col">
                <div class="card text-left h-100">
                    <img class="card-img-top" src="https://picsum.photos/400/200?random={{$i}}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">{{$post['title']}}</h4>
                        <p class="card-text">{{$post['author']}}</p>
                    </div>
                </div>
            </div>


            @empty

            <div class="col">
                <p>Sorry, we still have to write something! 😢</p>
            </div>


            @endforelse
        </div>
    </div>
</section>





@endsection