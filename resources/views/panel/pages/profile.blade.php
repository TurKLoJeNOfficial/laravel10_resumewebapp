@extends('panel.layout.layout')

@section('content')

    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Profile</h4>
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form class="forms-sample" action="{{ route('profile.edit', $profile->id=1) }}" method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <img src="{{asset($profile->image)}}" width="250">
                    </div>
                    <div class="form-group">
                        <label>Change Picture</label>
                        <input type="file" name="image" class="file-upload-default" id="image" accept="image/*"
                               style="display: none;">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled
                                   placeholder="Upload Image">
                            <span class="input-group-append">
            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
        </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Name Surname</label>
                        <input type="text" class="form-control" name="name" id="exampleInputUsername1"
                               value="{{$profile->name}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Username</label>
                        <input type="text" class="form-control" name="username" id="exampleInputUsername1"
                               value="{{$profile->username}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Email</label>
                        <input type="text" class="form-control" name="email" id="exampleInputUsername1"
                               value="{{$profile->email}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Phone</label>
                        <input type="text" class="form-control" name="phone" id="exampleInputUsername1"
                               value="{{$profile->phone}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Title</label>
                        <input type="text" class="form-control" name="title" id="exampleInputUsername1"
                               value="{{$profile->title}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Address</label>
                        <textarea type="text" class="form-control" name="address"
                                  id="exampleInputUsername1">{{$profile->address}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <a href="{{route('dashboard')}}" class="btn btn-light">Turn Back</a>
                </form>
            </div>
        </div>
    </div>
    <script>
        // Butona tıklanınca dosya seçme penceresini aç
        document.querySelector('.file-upload-browse').addEventListener('click', function () {
            document.getElementById('image').click();
        });

        // Dosya seçildiğinde dosya adını göster
        document.getElementById('image').addEventListener('change', function () {
            const fileName = this.files[0]?.name || '';
            document.querySelector('.file-upload-info').value = fileName;
        });
    </script>
@endsection
