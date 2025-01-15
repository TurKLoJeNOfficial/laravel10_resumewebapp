@extends('panel.layout.layout')

@section('content')

    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Change Password</h4>
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if(session('password'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('password') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if(session('newpassword'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('newpassword') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form class="forms-sample" action="{{ route('password.edit', $password->id=1) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleInputUsername1">Current Password</label>
                        <input type="password" class="form-control" name="password" id="exampleInputUsername1" placeholder="Current Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">New Password</label>
                        <input type="password" class="form-control" name="newpassword" id="exampleInputEmail1" placeholder="New Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">New Re-Password</label>
                        <input type="password" class="form-control" name="newpassword_confirmation" id="exampleInputEmail1" placeholder="Confirm New Password">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <a href="{{route('password')}}" class="btn btn-light">Turn Back</a>
                </form>
            </div>
        </div>
    </div>

@endsection
