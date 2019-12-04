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
                    <a href="{{ route('contact-us-page.index', ['lang' => $lang->id ]) }}">{{ $lang->code }}</a>
                    @endforeach
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <h1>Page settings:</h1>
                    <form method="POST"
                        action="{{ route('contact-us-page.update', ['id' => $data['contact_us_page']->id])}}">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input name="title" class="form-control" value="{{ $data['contact_us_page']->title }}">
                        </div>
                        <div class="form-group">
                            <label>Card title</label>
                            <input name="card_title" class="form-control"
                                value="{{ $data['contact_us_page']->card_title }}">
                        </div>
                        <div class="form-group">
                            <label>Card email</label>
                            <input name="card_email" class="form-control"
                                value="{{ $data['contact_us_page']->card_email }}">
                        </div>
                        <div class="form-group">
                            <label>Card phone</label>
                            <input name="card_phone" class="form-control"
                                value="{{ $data['contact_us_page']->card_phone }}">
                        </div>
                        <div class="form-group">
                            <label>Card city</label>
                            <input name="card_city" class="form-control"
                                value="{{ $data['contact_us_page']->card_city }}">
                        </div>
                        <div class="form-group">
                            <label>Text</label>
                            <textarea name="form_text"
                                class="form-control">{{ $data['contact_us_page']->form_text }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Form name</label>
                            <input name="form_name" class="form-control"
                                value="{{ $data['contact_us_page']->form_name }}">
                        </div>
                        <div class="form-group">
                            <label>Form email</label>
                            <input name="form_email" class="form-control"
                                value="{{ $data['contact_us_page']->form_email }}">
                        </div>
                        <div class="form-group">
                            <label>Form phone</label>
                            <input name="form_phone" class="form-control"
                                value="{{ $data['contact_us_page']->form_phone }}">
                        </div>
                        <div class="form-group">
                            <label>Form btn title</label>
                            <input name="form_btn" class="form-control"
                                value="{{ $data['contact_us_page']->form_btn }}">
                        </div>
                        <div class="form-group">
                            <label>Footer title</label>
                            <input name="footer_title" class="form-control"
                                value="{{ $data['contact_us_page']->footer_title }}">
                        </div>
                        <div class="form-group">
                            <label>Footer btn title</label>
                            <input name="footer_btn_title" class="form-control"
                                value="{{ $data['contact_us_page']->footer_btn_title }}">
                        </div>
                        <button class="btn btn-success">Update</button>
                    </form>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection