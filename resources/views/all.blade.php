@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Статьи</div>

                    <div class="panel-body">


                      @foreach($arr as $one)
                          <p>
                              <a href="{{asset($one->url)}}">
                                  {{$one->name}}
                              </a>
                          </p>
                          @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection