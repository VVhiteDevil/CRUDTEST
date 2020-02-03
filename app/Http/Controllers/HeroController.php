<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hero;
use App\Http\Requests\createHeroRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;

class HeroController extends Controller
{
    use ValidatesRequests;
    public function index()
    {
        $hero = Hero::all();
        return view('hero.index', ['hero'=>$hero]);
    }
    public function create()
    {
        return view('hero.create');
    }
    public function store(createHeroRequest $request)
    {
        Hero::create($request->all());

        return redirect()->route('hero.index');
    }
    public function edit($id)
    {
        $myHero = Hero::find($id);

        return view('hero.edit', ['hero' => $myHero]);
    }

    public function update(createHeroRequest $request, $id)
    {
        $myHero = Hero::find($id);

        $myHero->fill($request->all());
        $myHero->save();

        return redirect()->route('hero.index');
    }
    public function show($id)
    {
        $myHero = Hero::find($id);
        
        return view('hero.show', ['hero' => $myHero]);
    }
    public function destroy($id)
    {
        Hero::find($id)->delete();
        
        return redirect()->route('hero.index');
    }
}
