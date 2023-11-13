@extends('layouts.app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">{{ trans('shop.category.edit') }}</h1>

        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @method('PUT')
            @csrf

            Name:
            <br />
            <input type="text" name="name" value="{{ $category->name }}" class="form-control" />

            <br />

            <input type="submit" class="btn btn-primary" value="{{ trans('shop.update') }}" />
            <br /><br />
        </form>

    </div>
    <!-- /.col-lg-12 -->
@endsection
