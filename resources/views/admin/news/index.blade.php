@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            @include('includes.admin.sidebar')
            <div class="col-md-9 float-md-right">
                <div class="card">
                    <div class="card-header">{{ __('News') }}</div>
                    <div class="card-body">
                        @include('includes.admin.message')
                    @if($news->count() > 0)
                            <table class="table table-sm">
                                <thead class="thead-dark">
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>

                                </thead>
                                <tbody>
                                @foreach($news as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>
                                            <a class="btn btn-sm btn-primary" href="{{ route('admin.news.edit',
                                            $item->id)
                                    }}">Edit</a>
                                            <form method="POST" action="{{ route('admin.news.destroy', ['id' =>
                                            $item->id])
                                    }}" style="display: inline-block"><button type="submit" class="btn btn-sm
                                    btn-danger">Delete</button>
                                                @csrf
                                                @method('DELETE')</form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $news->links() }}
                        @else
                            <p>Sorry No News record find</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
