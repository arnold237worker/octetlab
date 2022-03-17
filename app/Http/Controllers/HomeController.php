<?php

namespace App\Http\Controllers;

use App\Models\CategorieService;
use App\Models\Service;
use App\Models\Realisation;
use App\Models\Temoignage;
use App\Models\Equipe;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Process;
use App\Models\Avis;
use Mail;
use Exception;

class HomeController extends Controller
{
    public function home()
    {
        $categories = CategorieService::get();
        $services = Service::get();
        $temoignages = Temoignage::get();
        $equipes = Equipe::get();
        $realisations = Realisation::with(['images', 'service'])->get();
        return view('welcome', compact('categories', 'realisations', 'services', 'equipes', 'temoignages'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function service($slug)
    {
        $service = CategorieService::where("slug", $slug)->with('services')->first();
        $services_array = [];
        if($service){
            foreach($service->services as $item){
                array_push($services_array, $item->id);
            }
        }
        $realisations = Realisation::whereIn('service_id', $services_array)->with('images')->get();
        $categories = CategorieService::get();
        return view('service', compact('service', 'categories', 'realisations'));
    }

    public function realisations()
    {
        $realisations = Realisation::with(['images', 'service'])->simplePaginate(12);
        return view('realisations', compact('realisations'));
    }

    public function realisation($slug)
    {
        $realisation = Realisation::with(['images', 'service'])->where('slug', $slug)->first();
        $connexes = [];
        if($realisation){
            $connexes = Realisation::where('service_id', $realisation->service_id)->take(3)->get();
        }
        return view('realisation', compact('realisation', 'connexes'));
    }

    public function demander_un_devis(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required',
            'email' => 'required|email',
            'service' => 'required',
            'contenu' => 'required',
            'g-recaptcha-response' => 'required'
        ], [
            'required' => ':attribute est requis',
            'email' => 'adresse email invalide',
            'recaptcha' => 'La vérification pour les robots est requise'
        ]);

        $data = $request->all();
        $service = Service::find($data['service']);
        if($service){
            $data['service'] = $service;
        }

        Mail::send('request-quote', $data, function($message) {
            $message->to('arnoldprosperfosso237@gmail.com', 'OCTETLAB')->subject("Demande de service");
            $message->from('arnoldprosperfosso237@gmail.com','OCTETLAB');
        });
        return back()->withSuccess(__("file.devis-send"));
    
    }

    public function demander_package(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required',
            'email' => 'required|email',
            'package' => 'required',
            'contenu' => 'required',
            'g-recaptcha-response' => 'required'
        ]);

        $data = $request->all();

        Mail::send('demander-package', $data, function($message) {
            $message->to('arnoldprosperfosso237@gmail.com', 'OCTETLAB')->subject("Demande d'informations pour un package");
            $message->from('arnoldprosperfosso237@gmail.com','OCTETLAB');
        });
        return back()->withSuccess(__("file.message-send"));
    
    }

    public function envoyer_message(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required',
            'email' => 'required|email',
            'objet' => 'required',
            'contenu' => 'required',
            'g-recaptcha-response' => 'required'
        ], [
            'required' => ':attribute est requis',
            'email' => 'adresse email invalide',
            'recaptcha' => 'La vérification pour les robots est requise'
        ]);

        $data = $request->all();

        Mail::send('envoyer-message', $data, function($message) {
            $message->to('arnoldprosperfosso237@gmail.com', 'OCTETLAB')->subject("Nouveau message");
            $message->from('arnoldprosperfosso237@gmail.com','OCTETLAB');
        });
        return back()->withSuccess(__("file.message-send"));
    
    }

    public function about()
    {
        
        $temoignages = Temoignage::get();
        $equipes = Equipe::get();
        $services = Service::get();
        $packages = Package::get();
        $process = Process::all();
        return view('about', compact('equipes', 'temoignages', 'services', 'packages', 'process'));
    }

    public function packages()
    {
        $packages = Package::all();
        return view('packages', compact('packages'));
    }

    public function demarche()
    {
        $process = Process::all();
        return view('demarches', compact('process'));
    }

    public function noter_octetlab(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required',
            'email' => 'required|email',
            'note' => 'required',
            'commentaire' => 'required',
        ]);

        $data = $request->all();
        try {
            Avis::create($data);
            return back()->withSuccess(__("file.note-success"));
        }catch(Exception $e){
            return back()->withErrors(['message' => $e->getMessage()]);
        }
    }
    
}
