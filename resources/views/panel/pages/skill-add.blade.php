@extends('panel.layout.layout')

@section('content')

    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">New Skill</h4>
                <form class="forms-sample" action="{{ route('skill.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputUsername1">Skill Name</label>
                        <input type="text" class="form-control" name="skill" id="exampleInputUsername1" placeholder="Python">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ratio</label>
                        <input type="text" class="form-control" name="ratio" id="exampleInputEmail1" placeholder="90">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <a href="{{route('skills')}}" class="btn btn-light">Turn Back</a>
                </form>
            </div>
        </div>
    </div>

@endsection
