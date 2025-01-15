@extends('panel.layout.layout')

@section('content')

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">

                <div class="card-body">
                    {{-- Başarı Mesajları --}}
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    {{-- Hata Mesajları --}}
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="card-title mb-0">All Experiences</h4>
                        <a href="{{ route('experience.create') }}" class="btn btn-success">+ ADD</a>
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th style="font-weight: bold">#</th>
                                <th style="font-weight: bold">Title</th>
                                <th style="font-weight: bold">Company</th>
                                <th style="font-weight: bold">Start Date</th>
                                <th style="font-weight: bold">Finish Date</th>
                                <th style="font-weight: bold">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($experiences as $experience)
                                <tr>
                                    <td></td>
                                    <td>{{ $experience->title }}</td>
                                    <td>{{ $experience->company }}</td>
                                    <td>{{ $experience->start_date }}</td>
                                    <td>{{ $experience->finish_date }}</td>

                                    <td>
                                        <a href="{{ route('experience.edit', $experience->id) }}" class="btn btn-primary">Edit</a>

                                        <form action="{{ route('experience.destroy', $experience->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this language?');" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <br>
                        <div class="clearfix">
                            <div class="float-right">
                                {{ $experiences->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
