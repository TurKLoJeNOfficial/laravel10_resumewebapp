@extends('panel.layout.layout')

@section('content')

    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Experience</h4>
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form class="forms-sample" action="{{ route('experience.update', $experience->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleInputUsername1">Title</label>
                        <input type="text" class="form-control" name="title" id="exampleInputUsername1" value="{{$experience->title}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Company</label>
                        <input type="text" class="form-control" name="company" id="exampleInputUsername1" value="{{$experience->company}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Company URL</label>
                        <input type="text" class="form-control" name="company_url" id="exampleInputUsername1" value="{{$experience->company_url}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Start Date</label>
                        <input type="text" class="form-control" name="start_date" id="exampleInputUsername1" value="{{$experience->start_date}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Finish Date</label>
                        <input type="text" class="form-control" name="finish_date" id="exampleInputUsername1" value="{{$experience->finish_date}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <textarea type="text" class="form-control" name="description" id="exampleInputUsername1">{{$experience->description}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <a href="{{route('experiences')}}" class="btn btn-light">Turn Back</a>
                </form>
            </div>
        </div>
    </div>

@endsection
