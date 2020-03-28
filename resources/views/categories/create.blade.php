@extends('app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">{{ trans('shop.category.new') }}</h1>

        <form action="{{ route('categories.store') }}" method="POST">
            @csrf

            {{ trans('shop.category.name') }}
            <br />
            <input type="text" name="name" value="" class="form-control" />

            <br />

            <input type="submit" class="btn btn-primary" value="{{ trans('shop.save') }}" />
            <br /><br />
        </form>

    </div>
    <!-- /.col-lg-12 -->
@endsection
