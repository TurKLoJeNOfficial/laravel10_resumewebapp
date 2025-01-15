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
                        <h4 class="card-title mb-0">All Skills</h4>
                        <a href="{{ route('skill.create') }}" class="btn btn-success">+ ADD</a>
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th style="font-weight: bold">#</th>
                                <th style="font-weight: bold">Skill Name</th>
                                <th style="font-weight: bold">Ratio</th>
                                <th style="font-weight: bold">Created Date</th>
                                <th style="font-weight: bold">Last Update Date</th>
                                <th style="font-weight: bold">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($skills as $skill)
                                <tr>
                                    <td></td>
                                    <td>{{ $skill->skill }}</td>
                                    <td>{{ $skill->ratio }}</td>
                                    <td>{{$skill->created_at->format('d/m/Y ~ H:i:s')}}</td>
                                    <td>{{$skill->created_at->format('d/m/Y ~ H:i:s')}}</td>
                                   <td>
                                       <a href="{{ route('skill.edit', $skill->id) }}" class="btn btn-primary">Edit</a>
                                       <!-- Silme işlemi -->

                                       <form action="{{ route('skill.destroy', $skill->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this blog?');" style="display: inline-block;">
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
                                {{ $skills->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
