@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Modal -->
    <div class="modal fade" id="addNewProject" tabindex="-1" role="dialog" aria-labelledby="addNewProjectLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addNewProjectLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h1>Page settings:</h1>
                    <form method="POST" action="{{ route('blog-detail-page.store')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="lang_id" value="{{ $data['lang'] }}">
                        <div class="form-group">
                            <label>Title</label>
                            <input name="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Subtitle text</label>
                            <textarea name="subtitle_text" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Kepp reading</label>
                            <input name="keep_reading" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Footer title</label>
                            <input name="footer_title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Footer btn title</label>
                            <input name="footer_btn_title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="file" name="image" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Image title</label>
                            <input name="image_title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Image text</label>
                            <textarea name="image_text" class="form-control"></textarea>
                        </div>
                        <button class="btn btn-primary">Store</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Blog projects page editor
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addNewProject">
                        Add new
                    </button></div>
                <div class="card-body">
                    Lang:
                    @foreach($data['langs'] as $lang)
                    <a href="{{ route('blog-project-list.index', ['lang' => $lang->id ]) }}">{{ $lang->code }}</a>
                    @endforeach
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <h1>Select blog project:</h1>
                    @foreach($data['blog_projects'] as $project)
                    <a href="{{ route('blog-detail-page.index', ['lang' => $data['lang'], 'project_id' => $project->id]) }}">
                        {{ $project->title }}
                    </a> <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div> @endsection