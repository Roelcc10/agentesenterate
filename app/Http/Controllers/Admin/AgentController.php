<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\AgentStoreRequest;
use App\Http\Requests\AgentUpdateRequest;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;

use App\Agent;


class AgentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $name = $request->get('name');
        $agents = Agent::orderBy('id', 'ASC')
            ->name($name)
            ->where('user_id', auth()->user()->id)

            ->paginate(15);

        return view('admin.agents.index', compact('agents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
//        $tags       = Tag::orderBy('name', 'ASC')->get();

        return view('admin.agents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AgentStoreRequest $request)
    {
        $agent = Agent::create($request->all());
        $this->authorize('pass', $agent);

        //IMAGE 
        if($request->file('image')){
            $path = Storage::disk('public')->put('image',  $request->file('image'));
            $agent->fill(['file' => asset($path)])->save();
        }

        //TAGS
//        $agent->tags()->attach($request->get('tags'));

        return redirect()->route('agents.index', $agent->id)->with('info', 'Agente creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $agent = Agent::find($id);
        $this->authorize('pass', $agent);

        return view('admin.agents.show', compact('agent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $agent       = Agent::find($id);
        $this->authorize('pass', $agent);

        return view('admin.agents.edit', compact('agent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AgentUpdateRequest $request, $id)
    {
        $agent = Agent::find($id);
        $this->authorize('pass', $agent);

        $agent->fill($request->all())->save();

        //IMAGE 
        if($request->file('image')){
            $path = Storage::disk('public')->put('image',  $request->file('image'));
            $agent->fill(['file' => asset($path)])->save();
        }



        return redirect()->route('agents.index', $agent->id)->with('info', 'Agente actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        $agent = Agent::find($id);
//        dd($agent);
//        $this->authorize('pass', $agent);
        $agent =Agent::find($id);

        if ($agent != null) {
            $agent->delete();
            return back()->with(['warning'=> 'Agente Eliminado!!']);
        }

//        return redirect()->route('dashboard')->with(['info'=> 'Eliminado!!']);
//        return back()->with('info', 'Eliminado correctamente');
    }
}
