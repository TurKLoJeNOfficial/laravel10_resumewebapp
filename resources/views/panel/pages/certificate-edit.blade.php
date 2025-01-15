@extends('panel.layout.layout')

@section('content')

    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Certificate</h4>
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form class="forms-sample" action="{{ route('certificate.update', $certificate->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleInputUsername1">Title</label>
                        <input type="text" class="form-control" name="title" id="exampleInputUsername1" value="{{$certificate->title}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Date</label>
                        <input type="text" class="form-control" name="date" id="exampleInputUsername1" value="{{$certificate->date}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">URL</label>
                        <input type="text" class="form-control" name="url" id="exampleInputUsername1" value="{{$certificate->url}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Description</label>
                        <textarea type="text" class="form-control" name="description" id="exampleInputUsername1">{{$certificate->description}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <a href="{{route('certificates')}}" class="btn btn-light">Turn Back</a>
                </form>
            </div>
        </div>
    </div>

@endsection
