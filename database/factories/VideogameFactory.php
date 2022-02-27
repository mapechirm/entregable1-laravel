<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class VideogameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $nombre = Str::random(12);
        $precioAdq = $this -> faker -> randomFloat(2, 1, 6000);
        $consolas = ['Ps', 'Xb', 'Pc', 'Mb', 'Sw'];

        return [
            'nombre' => $nombre,
            'slug' => strtolower(str_replace(' ', '-', $nombre)),
            'clasificacion' => $this -> faker -> title(),
            'consola' => $consolas[rand(0,count($consolas) - 1)],
            'precioAdq' => $precioAdq,
            'precioVent' => $precioAdq * 1.4
        ];
    }
}
