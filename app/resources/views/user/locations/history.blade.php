@extends('template.main')

@section('title', $location->name)

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            Historial del {{ $location->name }}
                            <a href="{{ route('location', ['id' => $location->id]) }}" class="btn btn-default float-right"><i class="fa fa-arrow-left"></i> Regresar</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                <tr>
                                    <th>ID</th>
                                    <th>Temperatura</th>
                                    <th>Humedad</th>
                                    <th>Contaminación</th>
                                    <th>Sonido</th>
                                    <th>Sensor ID</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($records as $record)
                                    <tr>
                                        <td>{{ $record->id }}</td>
                                        <td>{{ $record->temperature }}</td>
                                        <td>{{ $record->humidity }}</td>
                                        <td>{{ $record->pollution }}</td>
                                        <td>{{ $record->sound }}</td>
                                        <td>{{ $record->sensor_id }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection