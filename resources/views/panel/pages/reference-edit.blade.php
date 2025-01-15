@extends('panel.layout.layout')

@section('content')

    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Reference</h4>
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form class="forms-sample" action="{{ route('reference.update', $reference->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleInputUsername1">Name</label>
                        <input type="text" class="form-control" name="name" id="exampleInputUsername1" value="{{$reference->name}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Company</label>
                        <input type="text" class="form-control" name="company" id="exampleInputEmail1" value="{{$reference->company}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" name="title" id="exampleInputEmail1" value="{{$reference->title}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Mail</label>
                        <input type="text" class="form-control" name="mail" id="exampleInputEmail1" value="{{$reference->mail}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="text" class="form-control" name="phone" id="exampleInputEmail1" value="{{$reference->phone}}">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <a href="{{route('references')}}" class="btn btn-light">Turn Back</a>
                </form>
            </div>
        </div>
    </div>

@endsection
