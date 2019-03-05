@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($arr as $a)
                    <p>
                        {{$a->name}}
                        {{$a->id}}
                        <br>
                        <a href="{{ route('edit', ['id' => $a->id] ) }}">
                            Редактировать
                        </a>
                    </p>
                @endforeach
            </div>
        </div>
    </div>
@endsection
