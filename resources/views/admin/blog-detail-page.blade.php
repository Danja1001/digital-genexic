@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Blog detail page editor
                </div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <h1>Page settings:</h1>
                    <form method="POST" action="{{ route('blog-detail-page.update', ['id' => $data['blog_detail_page']->id])}}">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input name="title" class="form-control" value="{{ $data['blog_detail_page']->title }}">
                        </div>
                        <div class="form-group">
                            <label>Subtitle text</label>
                            <textarea name="subtitle_text" class="form-control">{{ $data['blog_detail_page']->subtitle_text }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Kepp reading</label>
                            <input name="keep_reading" class="form-control" value="{{ $data['blog_detail_page']->keep_reading }}">
                        </div>
                        <div class="form-group">
                            <label>Footer title</label>
                            <input name="footer_title" class="form-control" value="{{ $data['blog_detail_page']->footer_title }}">
                        </div>
                        <div class="form-group">
                            <label>Footer btn title</label>
                            <input name="footer_btn_title" class="form-control" value="{{ $data['blog_detail_page']->footer_btn_title }}">
                        </div>
                        <button class="btn btn-success">Update</button>
                    </form>
                    <h1>Blog image</h1>
                    @foreach($data['icons'] as $icon)
                    <form method="POST" action="{{ route('images.update', ['id' => $icon->id, 
                        'text_id' => $icon->text($data['lang'])->id]) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col">
                                <img src="{{ asset('storage/' . $icon->image)}}" class="img-thumbnail">
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="col">
                                <label>Image title</label>
                                <input class="form-control" name="title" value="{{ $icon->text($data['lang'])->title }}">
                            </div>
                            <div class="col">
                                <label>Image title</label>
                                <textarea name="text" class="form-control">{{ $icon->text($data['lang'])->text }}</textarea>
                                <button class="btn btn-success">Update</button>
                            </div>
                        </div>
                        <br>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection