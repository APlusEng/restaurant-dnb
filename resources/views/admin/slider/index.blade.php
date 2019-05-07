@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            @include('includes.admin.sidebar')
            <div class="col-md-9 float-md-right">
                <div class="card">
                    <div class="card-header">{{ __('Sliders') }}</div>
                    <div class="card-body">
                        @include('includes.admin.message')
                    @if($sliders->count() > 0)
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
                            @foreach($sliders as $slider)
                            <tr>
                                <td>{{ $slider->id }}</td>
                                <td>{{ $slider->title }}</td>
                                <td>{{ $slider->image }}</td>
                                <td>
                                    <a class="btn btn-sm btn-primary" href="{{ route('admin.slider.edit', $slider->id)
                                    }}">Edit</a>
                                    <form method="POST" action="{{ route('admin.slider.destroy', ['id' => $slider->id])
                                    }}" style="display: inline-block"><button type="submit" class="btn btn-sm
                                    btn-danger">Delete</button>
                                    @csrf
                                    @method('DELETE')</form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $sliders->links() }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
