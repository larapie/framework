<?php


namespace App\Foundation\Traits;

use Illuminate\Database\Eloquent\Factories\Factory;
use Larapie\Core\Support\Facades\Larapie;

trait HasFactory
{
    /**
     * Get a new factory instance for the model.
     *
     * @param  mixed  $parameters
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public static function factory(...$parameters)
    {
       // $manager = Larapie::getModules()->
        $factory = static::newFactory() ?: Factory::factoryForModel(get_called_class());

        return $factory
            ->count(is_numeric($parameters[0] ?? null) ? $parameters[0] : null)
            ->state(is_array($parameters[0] ?? null) ? $parameters[0] : ($parameters[1] ?? []));
    }

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        //
    }
}
