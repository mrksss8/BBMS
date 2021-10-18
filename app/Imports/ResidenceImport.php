<?php

namespace App\Imports;

use App\Residence;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\Failure;
use Throwable;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;


HeadingRowFormatter::default('none');

class ResidenceImport implements ToModel, WithHeadingRow , SkipsOnError, WithValidation, SkipsOnFailure
{
    use Importable, SkipsErrors, SkipsFailures;

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Residence([
                
               'last_name'          => $row['last_name'],
               'first_name'         => $row['first_name'],
               'middle_name'        => $row['middle_name'],
               'gender'             => $row['gender'],
               'birthday'           => $row['birthday'],
               'civil_status'       => $row['civil_status'],
               'house_number'       => $row['house_number'],
               'purok'              => $row['purok'],
               'street'             => $row['street'],
               'occupation'         => $row['occupation'],
               'type_of_house'      => $row['type_of_house'],
               'pwd'                => $row['pwd'],
               'membership_prog'    => $row['membership_prog'],
               'res_num'          => $row['res_num'],
        ]);
    }

    public function rules(): array{
        return [
            '*.res_num' => ['unique:residence,res_num']
        ];
    }
}
