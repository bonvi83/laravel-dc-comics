<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  questa funzione restituisce una vista che mostra un elenco di tutte le risorse Comic presenti nel database, recupera tutti i record della tabella e li passa  alla vista.
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  questa funzione crea una vista che contiene un modulo per creare una nuova risorsa Comic
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //  questa funzione gestisce la creazione di una nuova risorsa Comic, estrae tutti i dati inviati dal modulo utilizzando il metodo $request->all(), 
    //  crea una nuova istanza di Comic, riempie i suoi attributi con i dati ricevuti e salva il nuovo record nel database, 
    //  reindirizza l'utente alla vista "show" per visualizzare il dettaglio della nuova risorsa creata.
    public function store(Request $request)
    {
        $data = $request->all();
        $comic = new Comic;
        $comic->fill($data);
        $comic->save();
        return redirect()->route('comics.show', $comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */

    //  questa funzione restituisce una vista che mostra i dettagli di una risorsa comic specifica
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    //  questa funzione restituisce una vista che contiene un modulo per modificare una risorsa comic esistente.
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */

    //  questa funzione gestisce gli aggiornamenti di una risorsa comic esistente. Estrae i dati inviati dal modulo, 
    //  utilizza l'oggetto comic passato come parametro per individuare la risorsa da aggiornare nel database e aggiorna i suoi attributi con i nuovi dati
    //  reindirizza l'utente alla vista show per visualizzare i dettagli della risorsa aggiornata.
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();
        $comic->update($data);
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */

    //  questa funzione gestisce l'eliminazione di una risorsa comic esistente.
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index')->with('message-class', 'alert-danger')->with('message', 'Scheda eliminata correttamente.');
    }
}