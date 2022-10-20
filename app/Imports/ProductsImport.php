<?php

namespace App\Imports;

use App\Product;

use Maatwebsite\Excel\Concerns\ToModel;

class ProductsImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        if ($row[7] === "S"){
            $check = true;
        }else{
            $check = false;
        }
        return new Product([
            'name'     => $row[1],
            'category_id'     => $row[2],
            'tax_id'     => $row[3],
            'stock'     => $row[4],
            'img'     => $row[5],
            'price'     => $row[6],
            'checked'     => $check,
        ]);
    }

    public function headingRow(): int
    {
        return 2;
    }
}
