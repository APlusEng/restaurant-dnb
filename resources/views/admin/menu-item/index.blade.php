@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            @include('includes.admin.sidebar')
            <div class="col-md-9 float-md-right">
                <div class="card">
                    <div class="card-header">
                        {{ __('Menu Items') }}
                        <a class="btn btn-primary btn-sm float-right" href="{{ route('admin.menu-item.create') }}" >Add
                            New</a>
                    </div>
                    <div class="card-body">
                        @include('includes.admin.message')
                    @if($menuItems->count() > 0)
                            <table class="table table-sm">
                                <thead class="thead-dark">
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($menuItems as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>
                                            <a class="btn btn-sm btn-primary" href="{{ route('admin.menu-item.edit',
                                            $item->id)
                                    }}">Edit</a>
                                            <form method="POST" action="{{ route('admin.menu-item.destroy', ['id' =>
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
                        @else
                            <p>Sorry No Menu Item record found</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
