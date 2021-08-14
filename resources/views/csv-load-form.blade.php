@extends('layout')
@section('title', 'Загрузка файла')

@section('main_content')
    <div class='form_div'>
        <form method='POST' action='{{route('parse')}}' enctype='multipart/form-data'>
            {{csrf_field()}}
            <p><input type='file' name='get-file'></p>
            <button type='submit'>Загрузить</button>
        </form>
    </div>
    <p><a href='{{route('index')}}'>Просмотреть текущие записи</a></p>
@endsection
