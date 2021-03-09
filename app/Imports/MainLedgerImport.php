<?php

namespace App\Imports;

use Modules\Excelwork\Entities\MainLedger;
use Maatwebsite\Excel\Concerns\ToModel;

class MainLedgerImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
      if (isset($row[3])) {
        return new MainLedger([
            //
           // 'row'     =>  ++$this->row,
           'ticket_no'    => $row[3], 
           'co'    => $row[23], 
           // 'password' => Hash::make($row[2]),
        ]);
      }
    }
}
