@extends('layout')

@section('title', '[{{$item->code}}] {{$item->name}}')

@section('main_content')
    <h1>[{{$item->code}}] {{$item->name}}</h1>
    @isset($item->level_1)
        <h2>{{$item->level_1}}</h2>
    @endisset
    @isset($item->level_2)
        <h3>{{$item->level_2}}</h3>
    @endisset
    @isset($item->level_3)
        <h4>{{$item->level_3}}</h4>
    @endisset

    <table>
        <tr>
            <th>Цена</th>
            <th>Цена совместной закупки</th>
            <th>Количество</th>
            <th>Единицы измерения</th>
        </tr>
        <tr>
            <td>{{$item->price}}</td>
            <td>{{$item->JP_price}}</td>
            <td>{{$item->qty}}</td>
            <td>{{$item->UoM ?? ''}}</td>
        </tr>
    </table>
@endsection
