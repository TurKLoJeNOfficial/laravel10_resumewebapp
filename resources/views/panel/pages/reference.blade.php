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
                        <h4 class="card-title mb-0">All References</h4>
                        <a href="{{ route('reference.create') }}" class="btn btn-success">+ ADD</a>
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th style="font-weight: bold">#</th>
                                <th style="font-weight: bold">Name Surname</th>
                                <th style="font-weight: bold">Company</th>
                                <th style="font-weight: bold">Title</th>
                                <th style="font-weight: bold">Mail</th>
                                <th style="font-weight: bold">Phone</th>
                                <th style="font-weight: bold">Created Date</th>
                                <th style="font-weight: bold">Last Update Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($references as $reference)
                                <tr>
                                    <td></td>
                                    <td>{{ $reference->name }}</td>
                                    <td>{{ $reference->company ?? 'NULL'}}</td>
                                    <td>{{ $reference->title ?? 'NULL'}}</td>
                                    <td>{{ !empty($reference->mail) ? $reference->mail : '~' }}</td>
                                    <td>{{ $reference->phone ?? 'NULL' }}</td>
                                    <td>{{$reference->created_at->format('d/m/Y ~ H:i:s')}}</td>
                                    <td>{{$reference->created_at->format('d/m/Y ~ H:i:s')}}</td>
                                    <td>
                                        <a href="{{ route('reference.edit', $reference->id) }}" class="btn btn-primary">Edit</a>
                                        <!-- Silme işlemi -->

                                        <form action="{{ route('reference.destroy', $reference->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this blog?');" style="display: inline-block;">
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
                                {{ $references->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
