@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">About us page editor</div>
                <div class="card-body">
                    Lang:
                    @foreach($data['langs'] as $lang)
                    <a href="{{ route('about-us-page.index', ['lang' => $lang->id ]) }}">{{ $lang->code }}</a>
                    @endforeach
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <h1>Page settings:</h1>
                    <form method="POST" action="{{ route('about-us-page.update', ['id' => $data['about_us']->id])}}">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input name="title" class="form-control" value="{{ $data['about_us']->title }}">
                        </div>
                        <div class="form-group">
                            <label>Footer title</label>
                            <input name="footer_title" class="form-control" value="{{ $data['about_us']->footer_title }}">
                        </div>
                        <div class="form-group">
                            <label>Footer btn title</label>
                            <input name="footer_btn_title" class="form-control" value="{{ $data['about_us']->footer_btn_title }}">
                        </div>
                        <div class="form-group">
                            <label>Read more btn title</label>
                            <input name="read_more_btn_title" class="form-control" value="{{ $data['about_us']->read_more_btn_title }}">
                        </div>
                        <button class="btn btn-success">Update</button>
                    </form>
                    <br>
                    <h1>Head text settings:</h1>
                    @foreach($data['main'] as $main_text)
                    <form method="POST" action="{{ route('paragraphs.update', ['id' => $main_text->id]) }}">
                        @csrf
                        <div class="form-group">
                            <label>Text</label>
                            <textarea name="text" class="form-control">{{ $main_text->text }}</textarea>
                        </div>
                        <button class="btn btn-success">Update</button>
                    </form>
                    @endforeach
                    <br>
                    <h1>Our mission settings:</h1>
                    @foreach($data['our_mission'] as $our_mission)
                    <form method="POST" action="{{ route('paragraphs.update', ['id' => $our_mission->id]) }}">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input name="title" class="form-control" value="{{ $our_mission->title }}">
                        </div>
                        <div class="form-group">
                            <label>Text</label>
                            <textarea name="text" class="form-control">{{ $our_mission->text }}</textarea>
                        </div>
                        <button class="btn btn-success">Update</button>
                    </form>
                    @endforeach
                    <h1>Icons</h1>
                    <form method="POST" action="{{ route('images.update', ['id' => $data['image']->id]) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col">
                                <img src="{{ asset('storage/' . $data['image']->image)}}" class="img-thumbnail">
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="col">
                                <button class="btn btn-success">Update</button>
                            </div>
                        </div>
                        <br>
                    </form>
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
                                <label>Image text</label>
                                <input class="form-control" name="text" value="{{ $icon->text($data['lang'])->text }}">
                                <button class="btn btn-success">Update</button>
                            </div>
                        </div>
                        <br>
                    </form>
                    @endforeach
                    <br>
                    <h1>Genexic title settings:</h1>
                    <form method="POST" action="{{ route('paragraphs.update', ['id' => $data['genexic_title']->id]) }}">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input name="title" class="form-control" value="{{ $data['genexic_title']->title }}">
                        </div>
                        <button class="btn btn-success">Update</button>
                    </form>
                    <h1>Genexic description</h1>
                    @foreach($data['genexic_desc'] as $genexic_desc)
                    <form method="POST" action="{{ route('paragraphs.update', ['id' => $genexic_desc->id]) }}">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input name="title" class="form-control" value="{{ $genexic_desc->title }}">
                        </div>
                        <div class="form-group">
                            <textarea name="text" class="form-control">{{ $genexic_desc->text }}</textarea>
                        </div>
                        <button class="btn btn-success">Update</button>
                    </form>
                    @endforeach
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