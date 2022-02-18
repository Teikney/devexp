<?php

namespace Database\Seeders;

use App\Models\County;
use App\Models\Instituicao;
use App\Models\Institution;
use App\Models\InstitutionType;
use App\Models\Unit;
use App\Models\TipoInstituicao;
use Faker\Generator;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Reference https://betterprogramming.pub/how-to-seed-database-from-a-csv-file-in-laravel-83a54ce1015f
        //import CSV function
        function import_CSV($table, $delimiter = ',') {

            $file = database_path("seeders/records/$table".".csv");
            if(!file_exists($file) || !is_readable($file))
                return false;

            $header = null;
            $data = array();
            if (($handle = fopen($file, 'r')) !== false){

                while (($row = fgetcsv($handle, 1000, $delimiter)) !== false){

                    if(!$header)
                        $header = $row;
                    else
                        $data[] = array_combine($header, $row);

                }
                fclose($handle);

            }

            return $data;
        }

        // declaring and defining table name and path to csv
        $table = 'units';
        // store returned data into array of records
        $records = import_CSV($table);

        // add each record to the posts table in DB
        foreach ($records as $key => $record) {
            Unit::create([
                'name' => $record['name'],
                'initials' => $record['initials'],
            ]);
        }


        $table = 'counties';
        $records = import_CSV($table);

        // add each record to the posts table in DB
        foreach ($records as $key => $record) {
            County::create([
                'name' => $record['name'],
                'zone' => $record['zone'],
            ]);
        }

        $table='institutiontypes';
        $records = import_CSV($table);

        foreach ($records as $key => $record) {
            InstitutionType::create([
                'name' => $record['name'],
                'initials' => $record['initials'],
            ]);
        }

        Institution::create([
            'institution_type_id' => InstitutionType::find(1)->id,
            'county_id' => County::find(5)->id
        ]);


        foreach (County::all() as $county) {
            Institution::create([
                'institution_type_id' => InstitutionType::find(2)->id,
                'county_id' => $county->id
            ]);
        }

        // $table='institutions';
        // $records = import_CSV($table);

        // foreach ($records as $key => $record) {
        //     Institution::create([
        //         'institution_type_id' => $record['institution_type_id'],
        //         'county_id' => $record['county_id'],
        //     ]);
        // }

    }
}
