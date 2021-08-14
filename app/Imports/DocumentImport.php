<?php

namespace App\Imports;

use App\Models\Document;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;

HeadingRowFormatter::default('none');

class DocumentImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function model(array $row)
    {
        return new Document([

            'code' => $row['Код'],
            'name' => $row['Наименование'],
            'level_1' => $row['Уровень1'],
            'level_2' => $row['Уровень2'],
            'level_3' => $row['Уровень3'],
            'price' => $row['Цена'],
            'JP_price' => $row['ЦенаСП'],
            'qty' => $row['Количество'],
            'properties' => $row['Поля свойств'],
            'joint_purchases' => $row['Совместные покупки'],
            'UoM' => $row['Единица измерения'],
            'img' => $row['Картинка'],
            'brief' => $row['Выводить на главной'],
            'description' => $row['Описание'],
        ]);
    }
}
