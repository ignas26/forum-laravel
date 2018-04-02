<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Channel;
use Illuminate\Support\Facades\Auth;
use Validator;

class ChannelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $channels = Channel::orderBy('id', 'asc')->get();
        return view('channels.index', [
        'channels' => $channels
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {


        return view('channels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
          'title.required' => 'Jūs nieko neįrašėte!',
      ];
      $validator = Validator::make($request->all(), [
          'title' => 'required|unique:conversations|max:255'
      ], $messages);
      if ($validator->fails()) {
          return redirect(route('create'))
                      ->withErrors($validator)
                      ->withInput();
      }
        
        $channel = new Channel;
        $channel->title = $request->input('title');
        $channel->rowcount = $request->input('title');
        $channel->save();
        
        $request->session()->flash('message', 'Kanalas sukurtas');
        return redirect(route('front'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        return view('channels.edit')->with('channel', Channel::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $channel = Channel::find($id);
        $channel->title = $request->channel;
        $channel->rowcount = str_slug($request->channel);
        $channel->save();
        $request->session()->flash('message', 'Kanalo pavadinimas pakeistas');
        return redirect(route('adm'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Channel::destroy($id);
        $request->session()->flash('message', 'Kanalas pašalintas');
        return redirect(route('adm'));
    }
        
    public function __construct()
    {
        $this->middleware('auth');
    }
    
}