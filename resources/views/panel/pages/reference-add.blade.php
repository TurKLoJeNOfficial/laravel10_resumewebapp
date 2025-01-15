@extends('panel.layout.layout')

@section('content')

    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">New Reference</h4>
                <form class="forms-sample" action="{{ route('reference.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputUsername1">Name</label>
                        <input type="text" class="form-control" name="name" id="exampleInputUsername1" placeholder="John Doe">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Company</label>
                        <input type="text" class="form-control" name="company" id="exampleInputEmail1" placeholder="Company">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" name="title" id="exampleInputEmail1" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Mail</label>
                        <input type="text" class="form-control" name="mail" id="exampleInputEmail1" placeholder="mail@example.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="text" class="form-control" name="phone" id="exampleInputEmail1" placeholder="+905555555555}">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <a href="{{route('references')}}" class="btn btn-light">Turn Back</a>
                </form>
            </div>
        </div>
    </div>

@endsection
