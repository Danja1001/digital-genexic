@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Home page editor</div>
                <div class="card-body">
                    Lang:
                    @foreach($data['langs'] as $lang)
                    <a href="{{ route('home-page.index', ['lang' => $lang->id ]) }}">{{ $lang->code }}</a>
                    @endforeach
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <h1>Page settings:</h1>
                    <form method="POST" action="{{ route('home-page.update', ['id' => $data['home_page']->id])}}">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input name="title" class="form-control" value="{{ $data['home_page']->title }}">
                        </div>
                        <div class="form-group">
                            <label>Subtitle</label>
                            <input name="subtitle" class="form-control" value="{{ $data['home_page']->subtitle }}">
                        </div>
                        <div class="form-group">
                            <label>Header btn title</label>
                            <input name="header_btn_title" class="form-control"
                                value="{{ $data['home_page']->header_btn_title }}">
                        </div>
                        <div class="form-group">
                            <label>Footer title</label>
                            <input name="footer_title" class="form-control"
                                value="{{ $data['home_page']->footer_title }}">
                        </div>
                        <div class="form-group">
                            <label>Footer text</label>
                            <input name="footer_text" class="form-control"
                                value="{{ $data['home_page']->footer_text }}">
                        </div>
                        <div class="form-group">
                            <label>Footer btn title</label>
                            <input name="footer_btn_title" class="form-control"
                                value="{{ $data['home_page']->footer_btn_title }}">
                        </div>
                        <button class="btn btn-success">Update</button>
                    </form>
                    <br>
                    <h1>Our mission settings:</h1>
                    <form method="POST" action="{{ route('paragraphs.update', ['id' => $data['our_mission']->id]) }}">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input name="title" class="form-control" value="{{ $data['our_mission']->title }}">
                        </div>
                        <div class="form-group">
                            <label>Text</label>
                            <input name="text" class="form-control" value="{{ $data['our_mission']->text }}">
                        </div>
                        <button class="btn btn-success">Update</button>
                    </form>
                    <br>
                    <h1>Our offer settings:</h1>
                    <form method="POST" action="{{ route('paragraphs.update', ['id' => $data['offer']->id]) }}">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input name="title" class="form-control" value="{{ $data['offer']->title }}">
                        </div>
                        <button class="btn btn-success">Update</button>
                    </form>
                    <h1>Offer images</h1>
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
                                <label>Image text</label>
                                <input class="form-control" name="title"
                                    value="{{ $icon->text($data['lang'])->title }}">
                                <button class="btn btn-success">Update</button>
                            </div>
                        </div>
                        <br>
                    </form>
                    @endforeach
                    <br>
                    <h1>Working process settings:</h1>
                    <form method="POST"
                        action="{{ route('paragraphs.update', ['id' => $data['working_process']->id]) }}">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input name="title" class="form-control" value="{{ $data['working_process']->title }}">
                        </div>
                        <div class="form-group">
                            <label>Text</label>
                            <input name="text" class="form-control" value="{{ $data['working_process']->text }}">
                        </div>
                        <button class="btn btn-success">Update</button>
                    </form>
                    <h1>Working processes</h1>
                    @foreach($data['working_processes'] as $working_process)
                    <form method="POST" action="{{ route('working-process.update', ['id' => $working_process->id]) }}">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input name="title" class="form-control" value="{{ $working_process->title }}">
                        </div>
                        <button class="btn btn-success">Update</button>
                    </form>
                    @foreach($working_process->services as $service)
                    <form method="POST" action="{{ route('working-process.services.update', ['id' => $service->id]) }}">
                        @csrf
                        <div class="ml-5">
                            <div class="form-group">
                                <label>Name</label>
                                <input name="name" value="{{ $service->name }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Text</label>
                                <textarea name="text" class="form-control">{{ $service->text }}</textarea>
                            </div>
                            <button class="btn btn-success">Update</button>
                        </div>
                    </form>
                    <hr>
                    @endforeach
                    @endforeach
                    <br>
                    <h1>Vision</h1>
                    <form method="POST" action="{{ route('paragraphs.update', ['id' => $data['vision']->id]) }}">
                        @csrf
                        <div class="form-group">
                            <div class="form-group">
                                <label>Title</label>
                                <input name="title" class="form-control" value="{{ $data['vision']->title }}">
                            </div>
                            <div class="form-group">
                                <label>Subtitle</label>
                                <input name="text" class="form-control" value="{{ $data['vision']->text }}">
                            </div>
                        </div>
                        <button class="btn btn-success">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection