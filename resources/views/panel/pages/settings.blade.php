@extends('panel.layout.layout')

@section('content')

    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Settings</h4>
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form class="forms-sample" action="{{ route('settings.edit', $settings->id=1) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleInputUsername1">Title</label>
                        <input type="text" class="form-control" name="title" id="exampleInputUsername1"
                               value="{{$settings->title}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Description</label>
                        <input type="text" class="form-control" name="description" id="exampleInputUsername1"
                               value="{{$settings->description}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Keywords</label>
                        <input type="text" class="form-control" name="keyword" id="exampleInputUsername1"
                               value="{{$settings->keyword}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Author</label>
                        <input type="text" class="form-control" name="author" id="exampleInputUsername1"
                               value="{{$settings->author}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Color</label>
                        <select name="color" class="form-select" id="exampleSelectGender">
                            <option value="black" {{ $settings->color == 'black' ? 'selected' : '' }}>Black</option>
                            <option value="pink" {{ $settings->color == 'pink' ? 'selected' : '' }}>Pink</option>
                            <option value="purple" {{ $settings->color == 'purple' ? 'selected' : '' }}>Purple</option>
                            <option value="blue" {{ $settings->color == 'blue' ? 'selected' : '' }}>Blue</option>
                            <option value="indigo" {{ $settings->color == 'indigo' ? 'selected' : '' }}>Indigo</option>
                            <option value="cyan" {{ $settings->color == 'cyan' ? 'selected' : '' }}>Cyan</option>
                            <option value="aqua" {{ $settings->color == 'aqua' ? 'selected' : '' }}>Aqua</option>
                            <option value="teal" {{ $settings->color == 'teal' ? 'selected' : '' }}>Teal</option>
                            <option value="green" {{ $settings->color == 'green' ? 'selected' : '' }}>Green</option>
                            <option value="orange" {{ $settings->color == 'orange' ? 'selected' : '' }}>Orange</option>
                            <option value="yellow" {{ $settings->color == 'yellow' ? 'selected' : '' }}>Yellow</option>
                            <option value="gray" {{ $settings->color == 'gray' ? 'selected' : '' }}>Gray</option>
                            <option value="brown" {{ $settings->color == 'brown' ? 'selected' : '' }}>Brown</option>
                            <option value="red" {{ $settings->color == 'red' ? 'selected' : '' }}>Red</option>
                            <option value="amber" {{ $settings->color == 'amber' ? 'selected' : '' }}>Amber</option>
                            <option value="deep-orange" {{ $settings->color == 'deep-orange' ? 'selected' : '' }}>Deep Orange</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Music</label>
                        <input type="text" class="form-control" name="music" id="exampleInputUsername1"
                               value="{{$settings->music}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Footer</label>
                        <input type="text" class="form-control" name="footer" id="exampleInputUsername1"
                               value="{{$settings->footer}}">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <a href="{{route('dashboard')}}" class="btn btn-light">Turn Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
