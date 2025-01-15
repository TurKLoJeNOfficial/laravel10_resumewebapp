@extends('panel.layout.layout')

@section('content')

    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">New Certificate</h4>
                <form class="forms-sample" action="{{ route('certificate.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputUsername1">Title</label>
                        <input type="text" class="form-control" name="title" id="exampleInputUsername1" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Date</label>
                        <input type="text" class="form-control" name="date" id="exampleInputUsername1" placeholder="Date">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">URL</label>
                        <input type="text" class="form-control" name="url" id="exampleInputUsername1" placeholder="URL">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Description</label>
                        <textarea type="text" class="form-control" name="description" id="exampleInputUsername1" placeholder="Description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <a href="{{route('certificates')}}" class="btn btn-light">Turn Back</a>
                </form>
            </div>
        </div>
    </div>

@endsection
