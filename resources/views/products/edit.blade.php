@extends('layouts.app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">{{ trans('shop.product.edit') }}</h1>

        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            {{ trans('shop.product.name') }}
            <br />
            <input type="text" name="name" value="{{ $product->name }}" class="form-control" />
            <br />

            {{ trans('shop.product.price') }}
            <br />
            <input type="text" name="price" value="{{ $product->price }}" class="form-control" />
            <br />

            {{ trans('shop.product.description') }}
            <br />
            <textarea name="description" class="form-control">{{ $product->description }}</textarea>
            <br />

            {{ trans('shop.product.category') }}
            <br />
            <select name="category_id" class="form-control">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" @if ($category->id == $product->category_id) selected @endif>{{ $category->name }}</option>
                @endforeach
            </select>
            <br />

            {{ trans('shop.product.photo') }}
            <br />
            <input type="file" name="photo" />
            <br /><br />

            <input type="submit" class="btn btn-primary" value="{{ trans('shop.save') }}" />
            <br /><br />
        </form>

    </div>
    <!-- /.col-lg-12 -->
@endsection
