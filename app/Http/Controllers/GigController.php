<?php

namespace App\Http\Controllers;

use App\Http\Requests\Gig\AddGigRequest;
use App\Models\Company;
use App\Models\Country;
use App\Models\Gig;
use App\Models\Role;
use App\Models\State;
use App\Models\Tag;
use App\Notifications\GigCreatedNotification;
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
        $this->company  = new Company();
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
        $data=[
            'tags' => $this->tag->all(),
            'gigs' => $this->gig->all()
        ];

        return view('gigs.index', $data);
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
            'companies' => $this->company->all(),
            'states' => $this->state->all(),
            'countries' => $this->country->all(),
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
    public function store(AddGigRequest $request)
    {


        $data = [
            'user_id'   =>  auth()->user()->id,
            'Role_id'   =>  $request->role,
            'company_id'=>  $request->company,
            'country_id'=>  $request->country,
            'state_id'  =>  $request->state,
            'address'   =>  $request->address,
            'min'       =>  $request->minimum_salary,
            'max'       =>  $request->maximum_salary,
        ];

        $gig = $this->gig->create($data);

        if($request->tags){

            $gig->tags()->attach($request->tags);
        }

        session()->flash('success', 'Gig added successfully');

        return redirect()->route('gigs.index');

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
        $data = [
            'roles' => $this->role->all(),
            'companies' => $this->company->all(),
            'states' => $this->state->all(),
            'countries' => $this->country->all(),
            'tags' => $this->tag->all(),
            'gig' => $gig
        ];
        return view('gigs.create', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gig  $gig
     * @return \Illuminate\Http\Response
     */
    public function update(AddGigRequest $request, Gig $gig)
    {
        $data = [
            'user_id'   =>  auth()->user()->id,
            'Role_id'   =>  $request->role,
            'company_id'=>  $request->company,
            'country_id'=>  $request->country,
            'state_id'  =>  $request->state,
            'address'   =>  $request->address,
            'min'       =>  $request->minimum_salary,
            'max'       =>  $request->maximum_salary,
        ];


        $gig->update($data);

        if($request->tags){

            $gig->tags()->sync($request->tags);
        }


        session()->flash('success', 'Gig update successfully');

        return redirect()->route('gigs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gig  $gig
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gig $gig)
    {
        $gig->delete();

        session()->flash('success', 'Gig deleted successfully');

        return redirect()->back();
    }
}
