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
        if ($row[8] === "S"){
            $check = true;
        }else{
            $check = false;
        }
        dd($row)
        return new Product([
            'name'     => $row[1],
            'category_id'     => $row[2],
            'tax_id'     => $row[3],
            'stock'     => $row[5],
            'img'     => $row[6],
            'price'     => $row[7],
            'checked'     => $check,
        ]);
    }

    public function headingRow(): int
    {
        return 2;
    }
}
