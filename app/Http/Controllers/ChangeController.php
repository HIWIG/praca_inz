<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Change;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ChangeController extends Controller
{
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
        //
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
     * @param  int  $changes
     * @return \Illuminate\Http\Response
     */
    public function show(Change $change)
    {
//        $changes = Change::join('users', 'changes.userId','=','users.id')->select('changes.id as changeId', 'users.name as userName', 'changes.type','changes.changeTime' )->get()
        $changes = Change::join('users', 'changes.userId','=','users.id')->join('files', 'files.id','=','changes.fileId')->select('changes.id as changeId', 'users.name as userName', 'changes.type','changes.changeTime', 'files.name as fileName')->get();

        return view('changes', compact('changes'));
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
