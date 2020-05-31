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
        $company->direction = "Avenida Siempreviva 742";
        $company->logo = "public/images/company-default.png";
        $company->website = "www.interbankvenez.ve";
        $company->save();

        factory(Company::class, 50)->create();
    }
}
