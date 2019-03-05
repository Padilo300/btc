@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xs-12">
                <form action="{{route('edit_request')}}" method="post">
                    {!! csrf_field() !!}
                    <div class="row">
                        <div class="col">
                            <input type="hidden" value="{{$arr[0]->id}}" name="id">
                            <input type="text" name="name" value="{{$arr[0]->name}}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">
                        add
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
