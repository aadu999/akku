@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @if(Auth::user()->modules->isEmpty())
                    <div class="panel panel-warning">
                        <div class="panel-heading">Device configuration missing</div>
                        <div class="panel-body">
                            <p>Please configure your device</p>
                            <p class="text-center">
                                <a class="btn btn-success" href="/configure"> setup your first
                                    device</a>
                            </p>
                        </div>
                    </div>
                @else

                    @foreach(Auth::user()->modules as $module)
                        <div class="panel panel-primary">
                            <div class="panel-heading">Module : {{$module->name}}</div>
                            <div class="panel-body">
                                <p>{{$module->name}}</p>
                            </div>
                        </div>
                    @endforeach
                @endif
                @foreach(Auth::user()->assignedModules as $module)
                    <div class="panel panel-default">
                        <div class="panel-heading">Module : {{$module->name}}</div>
                        <div class="panel-body">
                            <p>{{$module->name}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

