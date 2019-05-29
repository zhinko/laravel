@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                        <form method="post" action="{{asset('home')}}">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label for="exampleInputName">Название</label>
                                <input type="text" class="form-control" name="name" id="exampleInputName" placeholder="Название">
                                @if($errors->has('name'))
                                <b>
                                {{$errors->first('name')}}
                                </b>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInput">Описание</label>
                               <textarea name="body" class="form-control">
                               </textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <input type="file" name="picture" id="exampleInputFile">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
