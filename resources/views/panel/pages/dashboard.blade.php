@extends('panel.layout.layout')

@section('content')

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">

                <div class="card-body">
                    <h4 class="card-title">Last transactions</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th style="font-weight: bold">#</th>
                                <th style="font-weight: bold">IP Address.</th>
                                <th style="font-weight: bold">Log</th>
                                <th style="font-weight: bold">Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($logs as $log)
                                <tr>
                                    <td></td>
                                    <td>{{ $log->ipaddress }}</td>
                                    <td>

                                        @if($log->status == 1)
                                            <p style="color: green">{{ $log->log }}</p>
                                        @endif
                                            @if($log->status == 0)
                                                <p style="color: red">{{ $log->log }}</p>
                                            @endif

                                    </td>
                                    <td>
                                        {{ $log->created_at->format('d/m/Y ~ H:i:s') }}
                                    </td>



                                </tr>
                            @endforeach


                            </tbody>
                        </table>
<br>
                        <div class="clearfix">
                            <div class="float-right">
                                {{ $logs->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
