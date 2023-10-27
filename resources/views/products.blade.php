@extends('layouts.app')


@section('content')


<div class="banner py-4 bg-primary text-white mb-5">
    <div class="container">
        <h1>Products page</h1>
    </div>
</div>
<!--
<section class="products py-5">


    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
          {{--@foreach($products as $product)
            <div class="col">
                <div class="card shadow border-0">
                    <img src="{{$product['src']}}" alt="" class="card-img-top">
                    <div class="card-body text-center text-muted">
                        <h5>{{$product['titolo']}}</h5>
                    </div>
                </div>
            </div>
            @endforeach--}}
        </div>
    </div>
</section>
 -->
<div class="products pb-5">
    @foreach($products as $category => $list)
    <section class="{{$category}}">
        <div class="container">
            <h3 class="text-uppercase text-muted pt-5 pb-3">{{$category}}</h3>
            <div class="row row-cols-1 row-cols-md-3 g-4">

                @forelse($list as $product)
                <div class="col">
                    <div class="card shadow border-0">
                        <img src="{{$product['src']}}" alt="" class="card-img-top">
                        <div class="card-body text-center text-muted">
                            <h5>{{$product['titolo']}}</h5>
                        </div>
                    </div>
                </div>

                @empty
                <p>No pasta to eat.</p>
                @endforelse

            </div>
        </div>
    </section>
    @endforeach


</div>





@endsection