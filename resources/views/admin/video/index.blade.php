@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            @include('includes.admin.sidebar')
            <div class="col-md-9 float-md-right">
                <div class="card">
                    <div class="card-header">{{ __('Videos') }}</div>
                    <div class="card-body">
                        @if($videos->count() > 0)
                            <table class="table table-sm">
                                <thead class="thead-dark">
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Video Preview</th>
                                    <th>Action</th>
                                </tr>

                                </thead>
                                <tbody>
                                @foreach($videos as $video)
                                    <tr>
                                        <td>{{ $video->id }}</td>
                                        <td>{{ $video->title }}</td>
                                        <td><iframe width="240" height="160" src="https://www.youtube.com/embed/{{
                                        $video->video_id }}"
                                                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                                        <td>
                                            <a class="btn btn-sm btn-primary" href="{{ route('admin.video.edit',
                                            $video->id)
                                    }}">Edit</a>
                                            <form method="POST" action="{{ route('admin.video.destroy', ['id' =>
                                            $video->id])
                                    }}" style="display: inline-block"><button type="submit" class="btn btn-sm
                                    btn-danger">Delete</button>
                                                @csrf
                                                @method('DELETE')</form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $videos->links() }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
