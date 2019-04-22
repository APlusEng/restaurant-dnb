@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('includes.admin.sidebar')
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">{{ __('Edit Video') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.video.update', ['id' => $video->id]) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title')
                            }}</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control{{ $errors->has('title') ? '
                                is-invalid' : '' }}" name="title" value="{{ old('title', $video->title) }}"
                                           required
                                           autofocus>

                                    @if ($errors->has('title'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="link" class="col-md-4 col-form-label text-md-right">{{ __('Link')
                            }}</label>

                                <div class="col-md-6">
                                    <input id="link" type="text" class="form-control{{ $errors->has('link') ? '
                                is-invalid' : '' }}" name="link" value="{{ old('link', $video->link) }}"
                                           required
                                           autofocus>

                                    @if ($errors->has('link'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('link') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="link" class="col-md-4 col-form-label text-md-right">{{ __('Video Preview')
                            }}</label>
                                <iframe width="280" height="200" src="https://www.youtube.com/embed/{{
                                        $video->video_id }}"
                                        frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Save') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
