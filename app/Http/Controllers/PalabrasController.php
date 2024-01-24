<?php

namespace App\Http\Controllers;

class PalabrasController extends Controller
{
    private $palabras = [
        'gat',
        'sol',
        'mar',
        'riu',
        'cotó',
        'pau',
        'vent',
        'gran',
        'flor',
        'casa',
        'núvol',
        'pluja',
        'cel',
        'foc',
        'pont',
        'lloc',
        'màgia',
        'cor',
        'olor',
        'víde',
        'feix',
        'fer',
        'març',
        'abat',
        'cella',
        'cima',
        'jazz',
        'kiwi',
        'cigna',
        'fusta',
        'noble',
        'símbol',
        'fumar',
        'polar',
        'gelat',
        'veloç',
        'plena',
        'noble',
        'espai',
        'estel',
        'pluja',
        'poble',
        'font',
        'temps',
        'àvia',
        'cèrvol',
        'dansa',
        'cerca',
        'donar',
        'dotze',
        'corba',
        'crema',
        'llet',
        'molí',
        'nectar',
        'espiga',
        'capaç',
        'fruir',
        'creure',
        'rural',
        'serè',
        'ràpid',
        'filla',
        'galta',
        'galop',
        'gel',
        'gent',
        'gerra',
        'gir',
        'goig',
        'gola',
        'guant',
        'té',
        'paté',
        'tina',
        'cura'
    ];


    public function obtenerPalabras($longitud, $cantidad)
    {
        $palabrasFiltradas = array_filter($this->palabras, function ($palabra) use ($longitud) {
            return strlen($palabra) == $longitud;
        });

        return array_slice($palabrasFiltradas, 0, $cantidad);
    }
}