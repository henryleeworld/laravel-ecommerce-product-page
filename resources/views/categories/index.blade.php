@extends('layouts.app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">{{ trans('shop.category.title.plural') }}</h1>

        <a href="{{ route('categories.create') }}" class="btn btn-info">{{ trans('shop.category.new') }}</a>
        <br /><br />

        <table class="table">
            <thead>
                <tr>
                    <th>{{ trans('shop.category.name') }}</th>
                    <th></th>
                </tr>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('categories.edit', $category->id) }}">{{ trans('shop.category.edit') }}</a>

                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline">
                                @method('DELETE')
                                @csrf
                                <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('{{ trans('shop.are_you_sure') }}')" />
                            </form>
                        </td>
                    </tr>
                @endforeach
            </thead>
        </table>

    </div>
    <!-- /.col-lg-12 -->
@endsection
