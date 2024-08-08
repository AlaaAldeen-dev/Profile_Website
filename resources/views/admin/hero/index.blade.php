@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">

            <h1>Hero Section</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Update Hero Section</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.hero.update', 1) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="title"
                                            value="{{ @$hero->title }}">
                                            @error('title')
                                            <code>{{$message}}</code>
                                        @enderror
                                    </div>

                                </div>


                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Sub Title</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea name="sub_title" id="" class="form-control" style="height: 100px">{{ @$hero->sub_title }}</textarea>
                                        @error('sub_title')
                                        <code>{{$message}}</code>
                                    @enderror
                                    </div>

                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Button Text</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="btn_text"
                                            value="{{ @$hero->btn_text }}">
                                            @error('btn_text')
                                            <code>{{$message}}</code>
                                        @enderror
                                        </div>

                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Button Url</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="btn_url"
                                            value="{{ @$hero->btn_url }}">
                                            @error('btn_url')
                                            <code>{{$message}}</code>
                                        @enderror
                                        </div>

                                </div>

                                @if (@$hero->image)
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Preview
                                            Image</label>
                                        <div class="col-sm-12 col-md-7">
                                            <img src="{{ asset(@$hero->image) }}" class="w-25">
                                        </div>

                                    </div>
                                @endif


                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image
                                        Background</label>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose File</label>
                                            @error('image')
                                            <code>{{$message}}</code>
                                        @enderror
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
