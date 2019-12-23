@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Portfolio page editor</div>
                <div class="card-body">
                    Lang:
                    @foreach($data['langs'] as $lang)
                    <a href="{{ route('portfolio-page.index', ['lang' => $lang->id ]) }}">{{ $lang->code }}</a>
                    @endforeach
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <h1>Page settings:</h1>
                    <form method="POST" action="{{ route('portfolio-page.update', ['id' => $data['portfolio_page']->id])}}">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input name="title" class="form-control" value="{{ $data['portfolio_page']->title }}">
                        </div>
                        <div class="form-group">
                            <label>Subtitle</label>
                            <input name="subtitle" class="form-control" value="{{ $data['portfolio_page']->subtitle }}">
                        </div>
                        <div class="form-group">
                            <label>Subtitle text</label>
                            <textarea name="subtitle_text" class="form-control">{{ $data['portfolio_page']->subtitle_text }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Footer title</label>
                            <input name="footer_title" class="form-control" value="{{ $data['portfolio_page']->footer_title }}">
                        </div>
                        <div class="form-group">
                            <label>Footer btn title</label>
                            <input name="footer_btn_text" class="form-control" value="{{ $data['portfolio_page']->footer_btn_text }}">
                        </div>
                        <div class="form-group">
                            <label>Read more btn title</label>
                            <input name="read_more_btn" class="form-control" value="{{ $data['portfolio_page']->read_more_btn }}">
                        </div>
                        <button class="btn btn-success">Update</button>
                    </form>
                    <br>
                    @foreach($data['read_more'] as $read_more)
                    <form method="POST" action="{{ route('paragraphs.update', ['id' => $read_more->id]) }}">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input name="title" class="form-control" value="{{ $read_more->title }}">
                        </div>
                        <div class="form-group">
                            <textarea name="text" class="form-control">{{ $read_more->text }}</textarea>
                        </div>
                        <button class="btn btn-success">Update</button>
                    </form>
                    <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection