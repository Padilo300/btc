@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xs-12">
                <form action="{{route('add')}}" method="post">
                    {!! csrf_field() !!}
                    <div class="row">
                        <div class="col">
                            <input type="text" name="name">
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
