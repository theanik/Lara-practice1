<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Company;

class AddNewCompanyCmd extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:company {name} {phone?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add a new company';

 
    public function handle()
    {
        //$name
        $company = Company::create([
            'name' => $this->argument('name'),
            'phone' => $this->argument('phone')
        ]);
        $this->info('Added '.$company->name);
    }
}
