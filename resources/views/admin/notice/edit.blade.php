@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('includes.admin.sidebar')
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">{{ __('Edit Notice') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.notice.update', ['id' => $notice->id]) }}"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title')
                            }}</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control{{ $errors->has('title') ? '
                                is-invalid' : '' }}" name="title" value="{{ old('title', $notice->title) }}"
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
                                <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image')
                            }}</label>

                                <div class="col-md-6">
                                    <input id="image" type="file" class="form-control{{ $errors->has('image') ? '
                                is-invalid' : '' }}" name="image" value="{{ old('image') }}"
                                           required
                                           autofocus>

                                    @if ($errors->has('image'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
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
