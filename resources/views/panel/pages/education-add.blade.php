@extends('panel.layout.layout')

@section('content')

    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">New Education</h4>
                <form class="forms-sample" action="{{ route('education.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputUsername1">School Name</label>
                        <input type="text" class="form-control" name="school_name" id="exampleInputUsername1" placeholder="School Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Start Date</label>
                        <input type="text" class="form-control" name="start_date" id="exampleInputUsername1" placeholder="Start Date">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Finish Date</label>
                        <input type="text" class="form-control" name="finish_date" id="exampleInputUsername1" placeholder="Finish Date">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Description</label>
                        <textarea type="text" class="form-control" name="description" id="exampleInputUsername1" placeholder="Description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <a href="{{route('educations')}}" class="btn btn-light">Turn Back</a>
                </form>
            </div>
        </div>
    </div>

@endsection
