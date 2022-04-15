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
use Spatie\Newsletter\Newsletter;

class HomeController extends Controller
{
    public function home()
    {
        $categories = CategorieService::where('etat', 'published')->get();
        $services = Service::where('etat', 'published')->get();
        $temoignages = Temoignage::get();
        $equipes = Equipe::get();
        $realisations = Realisation::with(['images', 'service'])->where('etat', 'published')->get();
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
        if ($service) {
            foreach ($service->services as $item) {
                array_push($services_array, $item->id);
            }
        }
        $realisations = Realisation::whereIn('service_id', $services_array)->with('images')->where('etat', 'published')->get();
        $categories = CategorieService::get();
        return view('service', compact('service', 'categories', 'realisations'));
    }

    public function realisations()
    {
        $realisations = Realisation::with(['images', 'service'])->where('etat', 'published')->simplePaginate(12);
        return view('realisations', compact('realisations'));
    }

    public function realisation($slug)
    {
        $realisation = Realisation::with(['images', 'service'])->where('slug', $slug)->first();
        $connexes = [];
        if ($realisation) {
            $connexes = Realisation::where('service_id', $realisation->service_id)->where('id', '!=', $realisation->id)->take(3)->get();
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
        if ($service) {
            $data['service'] = $service;
        }

        Mail::send('request-quote', $data, function ($message) {
            $message->to('arnoldprosperfosso237@gmail.com', 'OCTETLAB')->subject("Demande de service");
            $message->from('octetlab.test@gmail.com', 'OCTETLAB');
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

        Mail::send('demander-package', $data, function ($message) {
            $message->to('arnoldprosperfosso237@gmail.com', 'OCTETLAB')->subject("Demande d'informations pour un package");
            $message->from('octetlab.test@gmail.com', 'OCTETLAB');
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

        Mail::send('envoyer-message', $data, function ($message) {
            $message->to('arnoldprosperfosso237@gmail.com', 'OCTETLAB')->subject("Nouveau message");
            $message->from('octetlab.test@gmail.com', 'OCTETLAB');
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
        } catch (Exception $e) {
            return back()->withErrors(['message' => $e->getMessage()]);
        }
    }

    public function rechercher(Request $request)
    {
        $this->validate($request, [
            'mot_cle' => 'required',
        ]);

        $mot_cle = $request['mot_cle'];
        $categories = CategorieService::where('nom_fr', 'like', '%' . $mot_cle . '%')->orWhere('nom_en', 'like', '%' . $mot_cle . '%')->orWhere('nom_de', 'like', '%' . $mot_cle . '%')->orWhere('contenu_fr', 'like', '%' . $mot_cle . '%')->orWhere('contenu_en', 'like', '%' . $mot_cle . '%')->orWhere('contenu_de', 'like', '%' . $mot_cle . '%')->get();


        $services = Service::where('nom_fr', 'like', '%' . $mot_cle . '%')->orWhere('nom_en', 'like', '%' . $mot_cle . '%')->orWhere('nom_de', 'like', '%' . $mot_cle . '%')->orWhere('contenu_fr', 'like', '%' . $mot_cle . '%')->orWhere('contenu_en', 'like', '%' . $mot_cle . '%')->orWhere('contenu_de', 'like', '%' . $mot_cle . '%')->with('categorie')->get();


        $equipe = Equipe::where('nom', 'like', '%' . $mot_cle . '%')->orWhere('poste_fr', 'like', '%' . $mot_cle . '%')->orWhere('poste_en', 'like', '%' . $mot_cle . '%')->orWhere('poste_de', 'like', '%' . $mot_cle . '%')->get();

        $realisations = Realisation::where('nom_fr', 'like', '%' . $mot_cle . '%')->orWhere('nom_en', 'like', '%' . $mot_cle . '%')->orWhere('nom_de', 'like', '%' . $mot_cle . '%')->orWhere('client', 'like', '%' . $mot_cle . '%')->orWhere('contenu_fr', 'like', '%' . $mot_cle . '%')->orWhere('contenu_en', 'like', '%' . $mot_cle . '%')->orWhere('contenu_de', 'like', '%' . $mot_cle . '%')->with(['service', 'images'])->get();

        return view('result', compact('equipe', 'realisations', 'categories', 'services', 'mot_cle'));
    }

    public function newsletter(Request $request)
    {
        $this->validate($request, [
            'email' => 'required'
        ]);

        $list_id = env('MAILCHIMP_List_ID');
        $api_key = env("MAILCHIMP_APIKEY");

        $data_center = substr($api_key, strpos($api_key, '-') + 1);

        $url = 'https://' . $data_center . '.api.mailchimp.com/3.0/lists/' . $list_id . '/members';

        $json = json_encode([
            'email_address' => $request['email'],
            'status'        => 'subscribed', //pass 'subscribed' or 'pending'
        ]);

        try {
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $api_key);
            curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 10);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
            $result = curl_exec($ch);
            $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);

            if (200 == $status_code) {
                return back()->withSuccess('Subscribe');
            }
        } catch (Exception $e) {
            return back()->withErrors(['message' => $e->getMessage()]);
        }
    }
}
