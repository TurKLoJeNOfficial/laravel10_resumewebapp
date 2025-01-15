@extends('panel.layout.layout')

@section('content')

    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Language</h4>
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form class="forms-sample" action="{{ route('language.update', $language->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleInputUsername1">Language</label>
                        <input type="text" class="form-control" name="language" id="exampleInputUsername1" value="{{$language->language}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ratio</label>
                        <input type="text" class="form-control" name="ratio" id="exampleInputEmail1" value="{{$language->ratio}}">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <a href="{{route('languages')}}" class="btn btn-light">Turn Back</a>
                </form>
            </div>
        </div>
    </div>

@endsection
