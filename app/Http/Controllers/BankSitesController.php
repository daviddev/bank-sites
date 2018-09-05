<?php

namespace App\Http\Controllers;

use App\BankSite;
use Illuminate\Http\Request;
use App\Http\Requests\BankSiteRequest;

class BankSitesController extends Controller
{
    /** 
     * UsersController constructor.
     */
    public function __construct() {
        $this->bankSiteModel = new BankSite();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $customerId = $request->get('customerId');
        $bankSites = $this->bankSiteModel->bankSites($customerId);
        return response()->json($bankSites);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BankSiteRequest $request)
    {
        $data = $request->all();
        $bankSite = BankSite::create($data);
        if ($bankSite) {
            return response()->json($bankSite);
        }
        return response()->json(['success' => false]);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
