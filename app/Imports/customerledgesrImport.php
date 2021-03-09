<?php

namespace App\Imports;

// use App\customerledger;
// use Maatwebsite\Excel\Concerns\ToModel;

use Modules\Excelwork\Entities\customerledger;
use Maatwebsite\Excel\Concerns\ToModel;


class customerledgesrImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        try {
          if (isset($row[3])) {
            # code...
          return new customerledger([
              //
             // 'sheet_no'     =>  $this->row,
             // 'sheet_row'     => $this->row,
             'ticket_no'    => $row[3], 
             // 'main_row' => $row[4],
          ]);
          
          }
        } catch (Exception $e) {
          dd($row);
        }
    }
}
