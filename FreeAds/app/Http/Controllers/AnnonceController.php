<?php

namespace App\Http\Controllers;
use App\Models\Annonce;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAnnonce;
use Illuminate\Support\Facades\DB;


class AnnonceController extends Controller
{
    /**
     * Show the application annonce.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function addAnnonce()
    {
        return view('addAnnonce');            
    }
    
    public function storeAnnonce(StoreAnnonce $request)
    {
        
        $validated = $request->validated();

        $ad = new Annonce();
        $ad->title = $validated['title'];
        $ad->description = $validated['description'];
        $ad->price = $validated['price'];
        $ad->photo = $validated['photo'];
        $ad->region = $validated['region'];
        $ad->id_user = auth()->user()->id;
        $ad->save();

        return redirect()->route('home')->with('success', 'Votre annonce a été postée.');
    }

    public function ListAnnonces()
    {        
        $ads = DB::table('ads')->orderBy('created_at', 'DESC')->paginate(1);
        
        return view('listAnnonces', compact('ads'));
    
    }
}

?>