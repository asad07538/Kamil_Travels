<?php

namespace App\Imports;

use App\Group;
use Maatwebsite\Excel\Concerns\ToModel;

class GroupsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Group([
            //
        ]);
    }
}
