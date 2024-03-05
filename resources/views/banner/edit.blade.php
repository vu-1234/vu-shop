@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif
                <div class="card-body">

                    <form action="{{ route('admin.banner.update', ['id' => $banner->id]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">banner Name</label>
                            <input type="text" name="name" value="{{ $banner->name }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Description</label>
                            <input type="text" name="description" value="{{ $banner->description }}"
                                class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Link</label>
                            <input type="text" name="url" value="{{ $banner->url }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">banner Image</label>
                            <input type="file" name="image" class="form-control">
                            <img src="{{ asset('uploads/Banner/' . $banner->image) }}" width="70px" height="70px"
                                alt="Image">
                        </div>
                        <div class="form-group">
                            <label for="menu">Sắp Xếp</label>
                            <input type="number" name="sort_by" value="{{ $banner->sort_by }}" class="form-control">
                        </div>

                        <div class="form-group mt-2">
                            <label>Kích Hoạt</label>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" value="1" type="radio" id="active"
                                    name="active" {{ $banner->active == 1 ? 'checked' : '' }}>
                                <label for="active" class="custom-control-label">Có</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" value="0" type="radio" id="no_active"
                                    name="active" {{ $banner->active == 0 ? 'checked' : '' }}>
                                <label for="no_active" class="custom-control-label">Không</label>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <a href="{{ route('admin.banner.index') }}" class="btn btn-secondary me-5">Trỏ lại</a>
                            <button type="submit" class="btn btn-primary">Update Banner</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
