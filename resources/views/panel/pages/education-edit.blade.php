@extends('panel.layout.layout')

@section('content')

    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Education</h4>
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form class="forms-sample" action="{{ route('education.update', $education->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleInputUsername1">School Name</label>
                        <input type="text" class="form-control" name="school_name" id="exampleInputUsername1" value="{{$education->school_name}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Start Date</label>
                        <input type="text" class="form-control" name="start_date" id="exampleInputUsername1" value="{{$education->start_date}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Finish Date</label>
                        <input type="text" class="form-control" name="finish_date" id="exampleInputUsername1" value="{{$education->finish_date}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Description</label>
                        <textarea type="text" class="form-control" name="description" id="exampleInputUsername1">{{$education->description}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <a href="{{route('educations')}}" class="btn btn-light">Turn Back</a>
                </form>
            </div>
        </div>
    </div>

@endsection
