@extends('layouts.app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">{{ trans('shop.product.title') }}</h1>

        <a href="{{ route('products.create') }}" class="btn btn-info">{{ trans('shop.product.new') }}</a>
        <br /><br />

        <table class="table">
            <thead>
                <tr>
                    <th>{{ trans('shop.product.name') }}</th>
                    <th>{{ trans('shop.product.price') }}</th>
                    <th></th>
                </tr>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>${{ $product->price }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">{{ trans('shop.edit') }}</a>

                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline">
                                @method('DELETE')
                                @csrf
                                <input type="submit" value="{{ trans('shop.delete') }}" class="btn btn-danger" onclick="return confirm('{{ trans('shop.are_you_sure') }}')" />
                            </form>
                        </td>
                    </tr>
                @endforeach
            </thead>
        </table>

    </div>
    <!-- /.col-lg-12 -->
@endsection
