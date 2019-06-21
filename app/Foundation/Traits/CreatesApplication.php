<?php

namespace App\Foundation\Traits;

use Illuminate\Contracts\Console\Kernel;

trait CreatesApplication
{
    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $bootstrapFile = dirname(__FILE__, 4).'/bootstrap/app.php';
        $app = require $bootstrapFile;

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }
}
