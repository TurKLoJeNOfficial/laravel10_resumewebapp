@extends('panel.layout.layout')

@section('content')

    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">New Project</h4>
                <form class="forms-sample" action="{{ route('project.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputUsername1">Project Name</label>
                        <input type="text" class="form-control" name="project_name" id="exampleInputUsername1" placeholder="Project Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Project Type</label>
                        <input type="text" class="form-control" name="project_type" id="exampleInputUsername1" placeholder="LARAVEL">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Project URL</label>
                        <input type="text" class="form-control" name="project_url" id="exampleInputUsername1" placeholder="URL">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Project Description</label>
                        <textarea type="text" class="form-control" name="project_description" id="exampleInputUsername1" placeholder="Description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <a href="{{route('projects')}}" class="btn btn-light">Turn Back</a>
                </form>
            </div>
        </div>
    </div>

@endsection
