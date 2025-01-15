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
                        <h4 class="card-title mb-0">All Languages</h4>
                        <a href="{{ route('language.create') }}" class="btn btn-success">+ ADD</a>
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th style="font-weight: bold">#</th>
                                <th style="font-weight: bold">Language</th>
                                <th style="font-weight: bold">Ratio</th>
                                <th style="font-weight: bold">Created Date</th>
                                <th style="font-weight: bold">Last Update Date</th>
                                <th style="font-weight: bold">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($languages as $index => $language)
                                <tr>
                                    <td></td>
                                    <td>{{ $language->language }}</td>
                                    <td>{{ $language->ratio }}%</td>
                                    <td>{{$language->created_at->format('d/m/Y ~ H:i:s')}}</td>
                                    <td>{{$language->created_at->format('d/m/Y ~ H:i:s')}}</td>

                                    <td>
                                        <a href="{{ route('language.edit', $language->id) }}" class="btn btn-primary">Edit</a>

                                        <form action="{{ route('language.destroy', $language->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this language?');" style="display: inline-block;">
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
                                {{ $languages->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
