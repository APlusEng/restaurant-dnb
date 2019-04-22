@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            @include('includes.admin.sidebar')
            <div class="col-md-9 float-md-right">
                <div class="card">
                    <div class="card-header">{{ __('Advertisements') }}</div>
                    @include('includes.admin.message')
                    <div class="card-body">
                        @if($advertisements->count() > 0)
                            <table class="table table-sm">
                                <thead class="thead-dark">
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>

                                </thead>
                                <tbody>
                                @foreach($advertisements as $advertisement)
                                    <tr>
                                        <td>{{ $advertisement->id }}</td>
                                        <td>{{ $advertisement->image }}</td>
                                        <td>
                                            <a class="btn btn-sm btn-primary" href="{{ route('admin.advertisement.edit',
                                            $advertisement->id)
                                    }}">Edit</a>
                                            <form method="POST" action="{{ route('admin.advertisement.destroy', ['id'
                                             =>
                                            $advertisement->id])
                                    }}" style="display: inline-block"><button type="submit" class="btn btn-sm
                                    btn-danger">Delete</button>
                                                @csrf
                                                @method('DELETE')</form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $advertisements->links() }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
