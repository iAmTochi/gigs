<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Gig;
use App\Models\Role;
use App\Models\State;
use App\Models\Tag;
use Illuminate\Http\Request;

class GigController extends Controller
{
    protected $gig;
    protected $role;
    protected $company;
    protected $state;
    protected $country;
    protected $tag;


    public function __construct()
    {
        $this->role     = new Role();
        $this->company  = new Country();
        $this->state    = new State();
        $this->country  = new Country();
        $this->tag      = new Tag();
        $this->gig      = new Gig();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'roles' => $this->role->all(),
            'companies' => $this->role->all(),
            'states' => $this->role->all(),
            'countries' => $this->role->all(),
            'tags' => $this->tag->all(),
        ];
        return view('gigs.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gig  $gig
     * @return \Illuminate\Http\Response
     */
    public function show(Gig $gig)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gig  $gig
     * @return \Illuminate\Http\Response
     */
    public function edit(Gig $gig)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gig  $gig
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gig $gig)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gig  $gig
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gig $gig)
    {
        //
    }
}
