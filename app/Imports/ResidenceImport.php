<?php

namespace App\Imports;

use App\Model\Resident;
use Illuminate\Validation\Rule;
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

class ResidenceImport implements ToModel, WithHeadingRow, SkipsOnError, WithValidation, SkipsOnFailure


{
    use Importable, SkipsErrors, SkipsFailures;

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Resident([
                
               'last_name'          => $row['lastname'],
               'first_name'         => $row['firstname'],
               'middle_name'        => $row['middlename'],
               'gender'             => $row['gender'],
               'birthday'           => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['birthday']),
               'civil_status'       => $row['civil status'],
               'house_number'       => $row['house number'],
               'purok'              => $row['purok'],
               'street'             => $row['street'],
               'occupation'         => $row['occupation'],
               'type_of_house'      => $row['type of house'],
               'pwd'                => $row['pwd'],
               'membership_prog'    => $row['membership program'],
               'res_num'            => $row['resident number'],
               'student'            => 'N/A'
        ]);
    }

      public function rules(): array{
          return [
            '*.resident number' => ['unique:residents,res_num']
          ];
      }
}
