<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Email;

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
    
    
    public function contacts()
    {
        return view('contacts');
    }
    
    //validazione
    public function send(Request $request){
        $request->validate([
            'input_name'=>'required|string',
            'input_mail'=>'required|email',
            'input_tel'=>'nullable|numeric',
            'input_message'=>'required|string|min:10',
        ]);

        //rimappato senza token
        $data = [
            'nome' => $request->input('input_name'),
            'indirizzo' =>strtolower($request->input('input_mail')),
            'telefono' => $request->input('input_tel'),
            'messaggio' => $request->input('input_message'),
        ];

        Mail::to('prova@gmail.com')->send(new Email($data));
        return redirect()->route('thankyou');
    }

    public function thankyou()
    {
        return view('thankyou');
    }
    
}
?>