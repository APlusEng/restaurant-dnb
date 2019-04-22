@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('includes.admin.sidebar')
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ __('Settings') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.setting.update', ['id' => $setting->id]) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Organization Name')
                            }}</label>

                            <div class="col-md-6">
                                <input id="org_name" type="text" class="form-control{{ $errors->has('org_name') ? '
                                is-invalid' : '' }}" name="org_name" value="{{ old('org_name', $setting->org_name) }}"
                                       required
                                       autofocus>

                                @if ($errors->has('org_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('org_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address')
                            }}</label>

                            <div class="col-md-6">
                                <input id="address" type="address" class="form-control{{ $errors->has('address') ? '
                                is-invalid' : '' }}" name="address" value="{{ old('address', $setting->address) }}"
                                       required>

                                @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="latest_news" class="col-md-4 col-form-label text-md-right">{{ __('Latest News')
                            }}</label>

                            <div class="col-md-6">
                                <input id="latest_news" type="text" class="form-control{{ $errors->has
                                ('latest_news')
                                ? '
                                is-invalid' : '' }}" name="latest_news" value="{{ old('latest_news', $setting->latest_news) }}"  required>

                                @if ($errors->has('latest_news'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('latest_news') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="video_or_news" class="col-md-4 col-form-label text-md-right">{{ __('Show Video
                             or
                            News')
                            }}</label>

                            <div class="col-md-6">
                                <div class="form-check form-check-inline">
                                    <input name="video" class="form-check-input" type="radio" id="video_or_news1"
                                           value="1" {{ $setting->video == 1 ?
                                    'checked' : '' }}>
                                    <label class="form-check-label" for="inlineCheckbox1" >Show Video</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="video" class="form-check-input" type="radio" id="video_or_news1"
                                           value="0" {{ $setting->video == 0 ? 'checked' : ''}}>
                                    <label class="form-check-label" for="inlineCheckbox2" >Show News</label>
                                </div>
                                
                            </div>
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
