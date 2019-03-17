@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <table class="table">
                    <tr>
                        <th>Название обменника</th>
                        <th>Ссылка на обменник</th>
                        <th>Умножить курс на %</th>
                        <th>Резерв</th>
                        <th>Кол-во отзывов</th>
                        <th>
                            Управление
                        </th>
                    </tr>
                    <tbody>

                @foreach($arr as $a)
                        <tr>
                            <td>
                                {{$a->name}}
                            </td>
                            <td>
                                {{$a->href}}    
                            </td>
                            <td>
                                {{$a->course_management}}    
                            </td>
                            <td>
                                {{$a->rezerv}}    
                            </td>
                            <td>
                                {{$a->review}}    
                            </td>
                            <td>
                                <a href="{{ route('edit', ['id' => $a->id] ) }}">
                                    Редактировать
                                </a>             
                                <br>

                                <a href="{{ route('remove', ['id' => $a->id] ) }}" style="color: red" >
                                    Удалить
                                </a>             

                            </td>
                        </tr>

                @endforeach
                    <a href="{{route('add_obj')}}">добавить</a>
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
@endsection
