<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Traits\Seedable;

class BadasoDeploymentOrchestratorSeeder extends Seeder
{
    use Seedable;

    protected $seedersPath = 'database/seeders/Badaso/CRUD/';

    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {

        $this->seed(LoginCRUDDataTypeAdded::class);
        $this->seed(LoginCRUDDataRowAdded::class);
        $this->seed(AppoinmentCRUDDataTypeAdded::class);
        $this->seed(AppoinmentCRUDDataRowAdded::class);
    }
}
