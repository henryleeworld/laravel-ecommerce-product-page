@extends('layouts.app')

@section('content')
        <div class="col-lg-3">

            <h1 class="my-4">{{ trans('shop.name') }}</h1>
            <div class="list-group">
                @foreach ($categories as $category)
                <a href="/?category_id={{ $category->id }}" class="list-group-item">{{ $category->name }}</a>
                @endforeach
            </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

            <div id="carouselExampleIndicators" class="carousel slide my-4" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></li>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></li>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></li>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="http://placehold.it/900x350" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="http://placehold.it/900x350" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="http://placehold.it/900x350" alt="Third slide">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">{{ trans('shop.previous') }}</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">{{ trans('shop.next') }}</span>
                </button>
            </div>

            <div class="row">

                @foreach ($products as $product)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">{{ $product->name }}</a>
                            </h4>
                            <h5>${{ $product->price }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <hr />
                            Category: {{ $product->category->name }}
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->
@endsection
