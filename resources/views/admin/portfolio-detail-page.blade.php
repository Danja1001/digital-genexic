@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Portfolio detail page editor
                </div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <h1>Page settings:</h1>
                    <form method="POST" action="{{ route('portfolio-detail-page.update', ['id' => $data['portfolio_detail_page']->id])}}">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input name="title" class="form-control" value="{{ $data['portfolio_detail_page']->title }}">
                        </div>
                        <div class="form-group">
                            <label>Subtitle</label>
                            <textarea name="subtitle" class="form-control">{{ $data['portfolio_detail_page']->subtitle }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input name="name" class="form-control" value="{{ $data['portfolio_detail_page']->name }}">
                        </div>
                        <div class="form-group">
                            <label>Footer title</label>
                            <input name="footer_title" class="form-control" value="{{ $data['portfolio_detail_page']->footer_title }}">
                        </div>
                        <div class="form-group">
                            <label>Footer btn title</label>
                            <input name="footer_btn_title" class="form-control" value="{{ $data['portfolio_detail_page']->footer_btn_title }}">
                        </div>
                        <button class="btn btn-success">Update</button>
                    </form>
                    <br />
                    <h1>Project date </h1>
                    <form method="POST" action="{{ route('paragraphs.update', ['id' => $data['project_date']->id]) }}">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input name="title" class="form-control" value="{{ $data['project_date']->title }}" />
                        </div>
                        <div class="form-group">
                            <label>Text</label>
                            <textarea name="text" class="form-control">{{ $data['project_date']->text }}</textarea>
                        </div>
                        <button class="btn btn-success">Update</button>
                    </form>
                    <br />
                    <h1>Project Category </h1>
                    <form method="POST" action="{{ route('paragraphs.update', ['id' => $data['project_category']->id]) }}">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input name="title" class="form-control" value="{{ $data['project_category']->title }}" />
                        </div>
                        <div class="form-group">
                            <label>Text</label>
                            <textarea name="text" class="form-control">{{ $data['project_category']->text }}</textarea>
                        </div>
                        <button class="btn btn-success">Update</button>
                    </form>
                    <br />
                    <h1>Project Client </h1>
                    <form method="POST" action="{{ route('paragraphs.update', ['id' => $data['project_client']->id]) }}">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input name="title" class="form-control" value="{{ $data['project_client']->title }}" />
                        </div>
                        <div class="form-group">
                            <label>Text</label>
                            <textarea name="text" class="form-control">{{ $data['project_client']->text }}</textarea>
                        </div>
                        <button class="btn btn-success">Update</button>
                    </form>
                    <br />
                    <h1>Project hours</h1>
                    <form method="POST" action="{{ route('paragraphs.update', ['id' => $data['project_hours']->id]) }}">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input name="title" class="form-control" value="{{ $data['project_hours']->title }}" />
                        </div>
                        <div class="form-group">
                            <label>Text</label>
                            <textarea name="text" class="form-control">{{ $data['project_hours']->text }}</textarea>
                        </div>
                        <button class="btn btn-success">Update</button>
                    </form>
                    <br />
                    <h1>Blog image</h1>
                    @foreach($data['icons'] as $icon)
                    <form method="POST" action="{{ route('images.update', ['id' => $icon->id]) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col">
                                <img src="{{ asset('storage/' . $icon->image)}}" class="img-thumbnail">
                                <input type="file" name="image" class="form-control">
                            </div>
                        </div>
                        <button class="btn btn-success">Update</button>
                        <br>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection