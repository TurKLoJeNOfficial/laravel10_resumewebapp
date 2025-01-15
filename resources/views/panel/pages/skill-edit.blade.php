@extends('panel.layout.layout')

@section('content')

    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Skill</h4>
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form class="forms-sample" action="{{ route('skill.update', $skill->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleInputUsername1">Skill Name</label>
                        <input type="text" class="form-control" name="skill" id="exampleInputUsername1" value="{{$skill->skill}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ratio</label>
                        <input type="text" class="form-control" name="ratio" id="exampleInputEmail1" value="{{$skill->ratio}}">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <a href="{{route('skills')}}" class="btn btn-light">Turn Back</a>
                </form>
            </div>
        </div>
    </div>

@endsection
