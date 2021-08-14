@extends('layout')

@section('title', 'Список записей')

@section('main_content')
    <table>
        <tr>
            <th>Код</th>
            <th>Наименование</th>
        </tr>
        @foreach($items as $item)
            <tr>
                <td><a href='{{route('show', ['id' => $item->id])}}'>{{$item->code}}</a></td>
                <td><a href='{{route('show', ['id' => $item->id])}}'>{{$item->name}}</a></td>
            </tr>
        @endforeach
    </table>
    <p>{{$items->links()}}</p>
@endsection
