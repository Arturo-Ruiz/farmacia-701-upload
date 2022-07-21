<?php

namespace App\Imports;

use App\Product;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            'name'     => $row['descripcion'],
            'category_id'     => $row['codigo_departamento'],
            'tax_id'     => $row['codigo_impuesto'],
            'stock'     => $row['existencia_real'],
            'img'     => $row['archivo_imagen_del_catalogo'],
            'price'     => $row['precio_venta_1_usd'],
        ]);
    }

    public function headingRow(): int
    {
        return 2;
    }

}
