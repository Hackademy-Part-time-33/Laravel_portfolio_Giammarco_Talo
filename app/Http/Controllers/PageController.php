<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function homepage()
    {
        return view('homepage');
    }
    
    public function aboutus()
    {
        return view('aboutus');
    }
    
    
    public static $services = [
        [
            'uri' => 'gestionale',
            'name' => 'Sistema Gestionali',
            'costo' => 1500,
            'tempo_di_realizzazione' => '2 settimane',
            // 'img' => '/img/default.png'
        ],
        [
            'uri' => 'ecommerce',
            'name' => 'Piattaforma eCommerce',
            'costo' => 2500,
            'tempo_di_realizzazione' => '3 settimane',
            // 'img' => '/img/default.png'
        ],
        [
            'uri' => 'siti-web',
            'name' => 'Siti Web',
            'costo' => 1000,
            'tempo_di_realizzazione' => '1 settimana',
            // 'img' => '/img/default.png'
        ],
        [
            'uri' => 'consulenza',
            'name' => 'Consulenza Web',
            'costo' => 3500,
            'tempo_di_realizzazione' => '4 settimane',
            // 'img' => '/img/default.png'
        ],
    ];
    
    public function services()
    {
        
        $titolo = 'I miei servizi scontati';
        return view('services',['services' => self::$services, 'titolo' => $titolo]);
        }
        
        public function service($service)
        {   
            foreach (self::$services as $element) {
                if ($service == $element['uri']) {
                    // dd($element);
                    return view('detail', ['service' => $element]);
                }
            }
            
            abort(404);
        }
        
    }

    
    ?>