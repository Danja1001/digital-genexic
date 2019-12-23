@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    Lang:
                    @foreach($data['langs'] as $lang)
                    <a href="{{ route('home', ['lang' => $lang->id ]) }}">{{ $lang->code }}</a>
                    @endforeach
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif


                    <h1>Menu settings</h1>

                    @foreach($data['menu'] as $menu)
                    <form action="{{ route('menu.update', ['id' => $menu->id]) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="page" value="{{ $menu->page }}" class="form-control" required>
                        </div>
                        <button class="btn btn-success">Update</button>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection