<?php

use Illuminate\Foundation\Inspiring;
use App\Company;
/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

Artisan::command('create:company-new', function(){
    $name = $this->ask('Enter Company Name');
    $phone = $this->ask('Enter Phone number');

    if($this->confirm('Are you raedy to Add'.$name.'?')){
        $company = Company::create([
            'name' => $name,
            'phone' => $phone
        ]);
        return $this->info('You add '.$company->name);
    }

    $this->warn('No company add');
    
})->describe('This commad also use to add Company');

Artisan::command('company:clear', function() {
    $this->info('clining!!');
    Company::whereDoesntHave('customers')->get()
        ->each(function($company){
            $company->delete();
            $this->warn($company->name);
        });
})->describe('Use to clear all unused company');
