@extends('panel.layout.layout')

@section('content')

    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">New Experience</h4>
                <form class="forms-sample" action="{{ route('experience.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputUsername1">Title</label>
                        <input type="text" class="form-control" name="title" id="exampleInputUsername1" placeholder="Developer">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Company</label>
                        <input type="text" class="form-control" name="company" id="exampleInputUsername1" placeholder="Company">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Company URL</label>
                        <input type="text" class="form-control" name="company_url" id="exampleInputUsername1" placeholder="Company Link">
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
                        <label for="exampleInputEmail1">Description</label>
                        <textarea type="text" class="form-control" name="description" id="exampleInputUsername1" placeholder="Description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <a href="{{route('experiences')}}" class="btn btn-light">Turn Back</a>
                </form>
            </div>
        </div>
    </div>

@endsection
