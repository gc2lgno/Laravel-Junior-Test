<?php

use App\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company = new Company();
        $company->name = "International Bank of Venezuela";
        $company->email = "interbankvenez@venezuela.com";
        $company->logo = "Logo de Prueba";
        $company->website = "www.interbankvenez.ve";
        $company->save();
    }
}
