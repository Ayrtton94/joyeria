<?php

namespace App\Imports;

use App\Models\Linea;
use Maatwebsite\Excel\Concerns\ToModel;

class LineaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Linea([
            'nombre'=> $row[0],
            'fecha'=> $row[1],
            'descripcion'=> $row[2],
            'status'=> $row[3],
        ]);
    }
}
