<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Office;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('offices')->insert([
            [   
                'name' => "Provincial Accountant's Office",
                'abbreviation' => 'PACCO'
            ],
            [
                'name' => 'Provincial Agriculturist Office',
                'abbreviation' => 'PAGRO'   
            ],
            [
                'name' => "Provincial Administrator's Office",
                'abbreviation' => 'PAO'
            ],
            [
                'name' => "Provincial Assessor's Office",
                'abbreviation' => 'PASEO'
            ],
            [
                'name' => "Provincial Disaster Risk Reduction and Management Office",
                'abbreviation' => 'PDRRMO'
            ],
            [
                'name' => "Davao de Oro Provincial Hospital - Laak"
                ,
                'abbreviation' => 'DdOPH-Laak'
            ],
            [
                'name' => "Davao de Oro Provincial Hospital - Maragusan",
                'abbreviation' => 'DdOPH-Maragusan'
            ],
            [
                'name' => "Davao de Oro Provincial Hospital - Montevista"
                ,
                'abbreviation' => 'DdOPH-Montevista'
            ],
            [
                'name' => "Davao de Oro Provincial Hospital - Pantukan",
                'abbreviation' => 'DdOPH-Pantukan'
            ],
            [
                'name' => "Provincial Environment and Natural Resources Office",
                'abbreviation' => 'PENRO'
            ],
            [
                'name' => "Provincial Engineer's Office",
                'abbreviation' => 'PEO'
            ],
            [
                'name' => "Provincial Governor's Office",
                'abbreviation' => 'PGO'
            ],
            [
                'name' => "Provincial Governor's Office – Bids and Awards Committee",
                'abbreviation' => 'PGO-BAC'
            ],
            [
                'name' => "Provincial General Services Office",
                'abbreviation' => 'PGSO'
            ],
            [
                'name' => "Provincial Health Office",
                'abbreviation' => 'PHO'
            ],
            [
                'name' => "Provincial Human Resource Management and Development Office",
                'abbreviation' => 'PHRMDO'
            ],
            [
                'name' => "Provincial Internal Audit Office",
                'abbreviation' => 'PIAO'
            ],
            [
                'name' => "Provincial Information and Communications Technology Office",
                'abbreviation' => 'PICTO'
            ],
            [
                'name' => "Provincial Legal Office",
                'abbreviation' => 'PLO'
            ],
            [
                'name' => "Provincial Planning and Development Office",
                'abbreviation' => 'PPDO'
            ],
            [
                'name' => "Provincial Social Welfare and Development Office",
                'abbreviation' => 'PSWDO'
            ],
            [
                'name' => "Provincial Treasurer's Office",
                'abbreviation' => 'PTO'
            ],
            [   
                'name' => "Provincial Veterinary Office",
                'abbreviation' => 'PVO'
            ],
            [
                
                'name' => "Sangguniang Panlalawigan Office",
                    'abbreviation' => 'SPO'
            ],
        ]);
    }
}