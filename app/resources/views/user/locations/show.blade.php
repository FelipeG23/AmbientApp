@extends('template.main')

@section('title', $location->name)

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            {{ $location->name }}
                            <a href="{{ route('history', ['id' => $location->id]) }}" class="btn btn-success float-right"><i class="fa fa-history"></i> Historial</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class="nc-icon nc-sun-fog-29 text-warning"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category">Temperatura</p>
                                    <p class="card-title">{{ round($records->temperature, 1) }} °C
                                    <p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-calendar"></i> {{ date('d M Y', strtotime($records->take_at)) }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class="nc-icon nc-note-03 text-success"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category">Sonido</p>
                                    <p class="card-title">{{ round($records->sound, 1) }} dB
                                    <p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-calendar"></i> {{ date('d M Y', strtotime($records->take_at)) }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class="nc-icon nc-sound-wave text-danger"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category">Contaminación</p>
                                    <p class="card-title">{{ round($records->pollution, 1) }} µg/m3
                                    <p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-calendar"></i> {{ date('d M Y', strtotime($records->take_at)) }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class="nc-icon nc-umbrella-13 text-primary"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category">Humedad</p>
                                    <p class="card-title">{{ round($records->humidity, 1) }} K
                                    <p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-calendar"></i> {{ date('d M Y', strtotime($records->take_at)) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header ">
                        <h5 class="card-title">Comentarios</h5>
                    </div>
                    <div class="card-body">
                        @foreach($location->comments as $comment)
                            <div class="row justify-content-center">
                                <div class="col-1">
                                    <img src="{{ asset('img/IconoArbol.png') }}" class="img img-rounded img-fluid"/>
                                    <p class="text-secondary text-center">{{ date('d M Y h:s A', strtotime($comment->created_at)) }}</p>
                                </div>
                                <div class="col-9 my-auto">
                                    <div class="clearfix" style="font-size: 1.33rem">{{ $comment->user->name }}</div>
                                    <p>{{ $comment->comment }}</p>
                                </div>
                            </div>
                        @endforeach
                        <div class="row justify-content-center">
                            <div class="col-9 my-auto">
                                <div class="clearfix" style="font-size: 1.33rem">Comentar</div>
                                <form action="{{ route('comment.add', ['id' => $location->id]) }}" class="form" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <textarea name="comment" id="comment" cols="30" rows="10" class="form-control" placeholder="Escribe tu comentario">
                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Comentar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection