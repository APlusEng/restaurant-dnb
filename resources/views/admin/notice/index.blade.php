@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            @include('includes.admin.sidebar')
            <div class="col-md-9 float-md-right">
                <div class="card">
                    <div class="card-header">{{ __('Notices') }}</div>
                    <div class="card-body">
                        @if($notices->count() > 0)
                        <table class="table table-sm">
                            <thead class="thead-dark">
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>

                            </thead>
                            <tbody>
                            @foreach($notices as $notice)
                            <tr>
                                <td>{{ $notice->id }}</td>
                                <td>{{ $notice->title }}</td>
                                <td>{{ $notice->image }}</td>
                                <td>
                                    <a class="btn btn-sm btn-primary" href="{{ route('admin.notice.edit', $notice->id)
                                    }}">Edit</a>
                                    <form method="POST" action="{{ route('admin.notice.destroy', ['id' => $notice->id])
                                    }}" style="display: inline-block"><button type="submit" class="btn btn-sm
                                    btn-danger">Delete</button>
                                    @csrf
                                    @method('DELETE')</form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $notices->links() }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
