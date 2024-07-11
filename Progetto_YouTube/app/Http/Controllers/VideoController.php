<?php

namespace App\Http\Controllers;

use App\Models\App;
use App\Models\Category;
use App\Models\Console;
use App\Models\Playlist;
use App\Models\System;
use App\Models\Video;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * 
     * 
     */

    private function validateData(Request $request){

        //dd($request);
        return $request->validate([
            'title'=>'required|string|min:2|max:255',
            'app_id'=>'required',
            'category_id'=>'required',
            'playlist_id'=>'required',
            'language'=>'required|string|max:2',
            'year'=>'required|Integer|min:1970|max:'.date('Y'),
            'description'=>'required|string',
            'link'=>'required|string',
            'poster'=>'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'console' =>'required|array',
            'console.*' => 'exists:categorie,id',
            'system' =>'required|array',
            'system.*' => 'exists:systems,id',


        ]);


    }


    public function index()
    {

        $playlists = Playlist::all();
        $apps = App::all();
        $categories = Category::all();
        $consoles = Console::all();
        $systems = System::all();
        $videos = Video::all();

        return view('videos.videoindex', compact('videos','playlists','apps','categories','systems','consoles'));

    }

        //* lato admin gestionaale

    public function index_admin()
    {
        $playlists = Playlist::all();
        $apps = App::all();
        $categories = Category::all();
        $consoles = Console::all();
        $systems = System::all();
        $videos = Video::all();
        //$videos = Video::orderBy('id,asc')->paginate(6);
        return view('admin.video.indexadmin', compact('videos','playlists','apps','categories','systems','consoles'));

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $playlists = Playlist::all();
        $apps = App::all();
        $categories = Category::all();
        $consoles = Console::all();
        $systems = System::all();

        return view('admin.video.create', compact('playlists','apps','categories','systems','consoles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       //dd($request);
         //dd($validateData);
       
        //$video =new Video;
        //$video ->title = $request->title;
        //$video ->app_id = $request->app_id;
         // $video ->category_id = $request->category_id;
        //$video ->playlist_id = $request->playlist_id;
        //$video ->year = $request->year;
        //$video ->link = $request->link;
        //$video ->poster = $request->poster;
        // $video ->language = $request->title;
        //$video ->description = $request->description;//

        $validateData = $this->validateData($request);
        $video =new Video;
         //riempio i campi della tabella
        $video->fill($validateData);
        //gestiamo l'inserimento dell'immagine
        $fileName = $request->file('poster')->getClientOriginalName();
        //carica l'immagine nella cartella storage/posters
        $posterPath = $request->file('poster')->storeAs('posters',$fileName,'public');
        //salva il percorso nel campo poster
        $video->poster = $posterPath;

        if($video->save()){
        //$video->save();
        //$video->consoles()->attach($request->consoles);
        //$video->sistems()->attach($request->systems);
        $video->consoles()->attach($validateData['consoles']);
        $video->systems()->attach($validateData['systems']);
        }
        return redirect()->route('videos.videoindex');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $video = Video::find($id);

        return view('videos.showvideo', compact('video'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)

    {
        $playlists = Playlist::all();
        $apps = App::all();
        $categories = Category::all();
        $consoles = Console::all();
        $systems = System::all();
        $video = Video::find($id);
        
        return view('admin.video.edit', compact('video','playlists','apps','categories','systems','consoles'));

    }
    /**
     * Update the specified resource in storage.qui si modificano i dati 
     */
    public function update(Request $request, string $id)
    {
       // $request->validate([
        //    'title'=>'required|string|min:2|max:255',
         //   'category_id'=>'required',
         //   'playlist_id'=>'required',
         //   'language'=>'required|string|max:2',
         //   'year'=>'required|Integer|min:1970|max:'.date('Y'),
        //    'description'=>'required|string',
        //    'link'=>'required|string',
        //    'poster'=>'required|string',
       // ]);
        $validateData = $this-> validateData($request);
        $video = Video::find($id);
        $video->update($validateData);
        $video->systems()->sync($request->systems);
        $video->consoles()->sync($request->consoles);
        

        return redirect()->route('admin.video.indexadmin');

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $video = Video::find($id);
        $video->delete();

        return redirect()->route('admin.video.indexadmin');
    }
}
