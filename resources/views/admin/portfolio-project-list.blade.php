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
                    <form method="POST" action="{{ route('portfolio-detail-page.store')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="lang_id" value="{{ $data['lang'] }}">
                        <div class="form-group">
                            <label>Title</label>
                            <input name="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Subtitle</label>
                            <textarea name="subtitle" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Footer title</label>
                            <input name="footer_title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Footer btn title</label>
                            <input name="footer_btn_title" class="form-control" required>
                        </div>

                        <h1>Project date </h1>
                        <div class="form-group">
                            <label>Title</label>
                            <input name="paragraphs[project_date][title]" class="form-control" required />
                            <input type="hidden" name="paragraphs[project_date][location]" value="project_date" />
                        </div>
                        <div class="form-group">
                            <label>Text</label>
                            <textarea name="paragraphs[project_date][text]" class="form-control" required></textarea>
                        </div>

                        <h1>Project Category </h1>
                        <div class="form-group">
                            <label>Title</label>
                            <input name="paragraphs[project_category][title]" class="form-control" required />
                            <input type="hidden" name="paragraphs[project_category][location]" value="project_category" />
                        </div>
                        <div class="form-group">
                            <label>Text</label>
                            <textarea name="paragraphs[project_category][text]" class="form-control" required></textarea>
                        </div>

                        <h1>Project Client </h1>
                        <div class="form-group">
                            <label>Title</label>
                            <input name="paragraphs[project_client][title]" class="form-control" required />
                            <input type="hidden" name="paragraphs[project_client][location]" value="project_client" />
                        </div>
                        <div class="form-group">
                            <label>Text</label>
                            <textarea name="paragraphs[project_client][text]" class="form-control" required></textarea>
                        </div>

                        <h1>Project hours</h1>
                        <div class="form-group">
                            <label>Title</label>
                            <input name="paragraphs[project_hours][title]" class="form-control" required />
                            <input type="hidden" name="paragraphs[project_hours][location]" value="project_hours" />
                        </div>
                        <div class="form-group">
                            <label>Text</label>
                            <textarea name="paragraphs[project_hours][text]" class="form-control" required></textarea>
                        </div>

                        <h1>Images</h1>
                        <div class="form-row">
                            <div class="col">
                                <input type="file" name="images[first]" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <input type="file" name="images[second]" class="form-control">
                            </div>
                        </div>


                        <button class="btn btn-success">Update</button>
                    </form>
                    <br />
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
                <div class="card-header">Portfolio projects page editor
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addNewProject">
                        Add new
                    </button></div>
                <div class="card-body">
                    Lang:
                    @foreach($data['langs'] as $lang)
                    <a href="{{ route('portfolio-project-list.index', ['lang' => $lang->id ]) }}">{{ $lang->code }}</a>
                    @endforeach
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <h1>Select blog project:</h1>
                    @foreach($data['portfolio_projects'] as $project)
                    <a href="{{ route('portfolio-detail-page.index', ['lang' => $data['lang'], 'project_id' => $project->id]) }}">
                        {{ $project->title }}
                    </a> <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div> @endsection