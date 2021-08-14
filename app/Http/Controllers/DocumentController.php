<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\DocumentImport;
use App\Models\Document;


class DocumentController extends Controller
{
    public function parse(Request $request){ //Парсинг загруженного файла
        $data = Excel::import(new DocumentImport, $request->file('get-file'));
        return redirect()->route('index');
    } //parse

    public function index(){ //Показ списка записей
        return view('index', ['items' => Document::simplePaginate(20, ['id', 'code', 'name'])]);
    } //index

    public function show($id){ //Показ информации о записи
        return view('show', ['item' => Document::find($id)]);
    } //show
}
