@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xs-12">
            <form action="{{route('edit_request')}}" method="post">
                    {!! csrf_field() !!}
                    <input type="hidden" value="{{$arr[0]->id}}" name="id">
                    <div class="row">
                        <div class="col">
                        <table class="table">
                            <tr>
                                <th>Название обменника</th>
                                <th>Какие валюты принимает</th>
                                <th>На какие валюты меняет</th>
                                <th>Ссылка на обменник</th>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" name="name"  value="{{$arr[0]->name}}">
                                </td>
                                <td>
                                    <select multiple size="5" name="startCurr[]">
                                        <option value="s_BTC" >BTC</option>
                                        <option value="s_BCH" >BCH</option>
                                        <option value="s_BSV" >BSV</option>
                                        <option value="s_BTG" >BTG</option>
                                        <option value="s_ETH" >ETH</option>
                                    </select>
                                </td>
                                <td>
                                    <select multiple size="5" name="finishCurr[]">
                                        <option value="f_BTC" >BTC</option>
                                        <option value="f_BCH" >BCH</option>
                                        <option value="f_BSV" >BSV</option>
                                        <option value="f_BTG" >BTG</option>
                                        <option value="f_ETH" >ETH</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="href" value="{{$arr[0]->href}}">
                                </td>
                            </tr>
                        </table>
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
