@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($arr as $a)
                    <p>
                        {{$a->name}}
                        <br>
                        <a href="{{ route('edit', ['id' => $a->id] ) }}">
                            Редактировать
                        </a>
                    </p>
                @endforeach
                    <a href="{{route('add_obj')}}">добавить</a>
            </div>
        </div>
    </div>
@endsection
