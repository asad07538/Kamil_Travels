<?php

namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Hash;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            //
           'name'     => $row[1],
           'email'    => $row[2], 
           'image'    => $row[3],
           'password' => Hash::make("123456789"),
        ]);
    }
}
