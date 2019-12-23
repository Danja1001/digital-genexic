@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Blog page editor</div>
                <div class="card-body">
                    Lang:
                    @foreach($data['langs'] as $lang)
                    <a href="{{ route('blog-page.index', ['lang' => $lang->id ]) }}">{{ $lang->code }}</a>
                    @endforeach
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <h1>Page settings:</h1>
                    <form method="POST" action="{{ route('blog-page.update', ['id' => $data['blog_page']->id])}}">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input name="title" class="form-control" value="{{ $data['blog_page']->title }}">
                        </div>
                        <div class="form-group">
                            <label>Search btn</label>
                            <input name="search_btn_placeholder" class="form-control" value="{{ $data['blog_page']->search_btn_placeholder }}">
                        </div>
                        <div class="form-group">
                            <label>Footer title</label>
                            <input name="footer_title" class="form-control" value="{{ $data['blog_page']->footer_title }}">
                        </div>
                        <div class="form-group">
                            <label>Footer btn title</label>
                            <input name="footer_btn_title" class="form-control" value="{{ $data['blog_page']->footer_btn_title }}">
                        </div>
                        <button class="btn btn-success">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection