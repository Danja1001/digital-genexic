@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- Modal -->
        <div class="modal fade" id="addServiceModal" tabindex="-1" role="dialog" aria-labelledby="addServiceModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addServiceModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('services.store') }}">
                            @csrf
                            <input type="hidden" name="lang_id" value="{{ $data['lang'] }}">
                            <input type="hidden" name="service_category_id" id="service-category">
                            <div class="form-group">
                                <label>Head title</label>
                                <input name="head_title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Name service</label>
                                <input name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Title</label>
                                <input name="title" class="form-control">
                            </div>
                            <div class=" form-group">
                                <label>Text</label>
                                <textarea name="text" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Footer title</label>
                                <input name="footer_title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Footer btn title</label>
                                <input name="footer_btn_title" class="form-control">
                            </div>
                            <button class="btn btn-success">Store</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Services page editor</div>
                <div class="card-body">
                    Lang:
                    @foreach($data['langs'] as $lang)
                    <a href="{{ route('services-page.index', ['lang' => $lang->id ]) }}">{{ $lang->code }}</a>
                    @endforeach
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <h1>Page settings:</h1>
                    <form method="POST" action="{{ route('services-page.update', ['id' => $data['services_page']->id])}}">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input name="title" class="form-control" value="{{ $data['services_page']->title }}">
                        </div>
                        <div class="form-group">
                            <label>Footer title</label>
                            <input name="footer_title" class="form-control" value="{{ $data['services_page']->footer_title }}">
                        </div>
                        <div class="form-group">
                            <label>Footer btn title</label>
                            <input name="footer_btn_title" class="form-control" value="{{ $data['services_page']->footer_btn_title }}">
                        </div>
                        <div class="form-group">
                            <label>Read more btn title</label>
                            <input name="read_more_btn_title" class="form-control" value="{{ $data['services_page']->read_more_btn_title }}">
                        </div>
                        <button class="btn btn-success">Update</button>
                    </form>
                    <br>
                    <h1>Services settings:</h1>
                    @foreach($data['service_categories'] as $service_category)
                    <form method="POST" action="{{ route('service-categories.update', ['id' => $service_category->id]) }}">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input name="title" class="form-control" value="{{ $service_category->title }}">
                        </div>
                        <button class="btn btn-success">Update</button>
                    </form>
                    <div class="ml-3">
                        @foreach($service_category->services as $service)
                        <form method="POST" action="{{ route('services.update', ['id' => $service->id]) }}">
                            @csrf
                            <input type="hidden" value="{{ $service->id }}" id="service{{ $service->id }}">
                            <div class="form-group">
                                <label>Head title</label>
                                <input name="head_title" class="form-control" value="{{ $service->head_title }}">
                            </div>
                            <div class="form-group">
                                <label>Name service</label>
                                <input name="name" class="form-control" value="{{ $service->name }}">
                            </div>
                            <div class="form-group">
                                <label>Title</label>
                                <input name="title" class="form-control" value="{{ $service->title }}">
                            </div>
                            <div class="form-group">
                                <label>Text</label>
                                <textarea name="text" class="form-control">{{ $service->text }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Footer title</label>
                                <input name="footer_title" class="form-control" value="{{ $service->footer_title }}">
                            </div>
                            <div class="form-group">
                                <label>Footer btn title</label>
                                <input name="footer_btn_title" class="form-control" value="{{ $service->footer_btn_title }}">
                            </div>
                            <button class="btn btn-success">Update</button>
                            <a href="javascript:void(0);" onclick="setId($('#service{{$service_category->id}}').val())" class="btn btn-primary" data-toggle="modal" data-target="#addServiceModal">Add new</a>
                        </form>
                        @endforeach
                    </div>
                    @endforeach
                    <br>
                    <h1>Read more texts:</h1>
                    <hr>
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
<script>
    function setId(id) {
        console.log(id);
        $('#service-category').val(id);
    }
</script>
@endsection