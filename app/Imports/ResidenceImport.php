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
                
               'last_name'          => $row['Lastname'],
               'first_name'         => $row['Firstname'],
               'middle_name'        => $row['Middlename'],
               'suffix_name'        => $row['Suffixname'],
               'gender'             => $row['Gender'],
               'birthday'           => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['Birthday']),
               'birthplace'         => $row['Birthplace'],
               'civil_status'       => $row['Civil Status'],
               'occupation'         => $row['Occupation'],
               'student'            => $row['Student'],
               'house_number'       => $row['House Number'],
               'purok'              => $row['Purok'],
               'street'             => $row['Street'],
               'type_of_house'      => $row['Type Of House'],
               'pwd'                => $row['PWD'],
               'membership_prog'    => $row['Subsidy Program'],
               'res_num'            => $row['Resident Number'],
        ]);
    }

      public function rules(): array{
          return [
            '*.Resident Number' => ['unique:residents,res_num']
          ];
      }
}
