<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Location;
use App\Models\Change;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use mysql_xdevapi\TableSelect;
use function Symfony\Component\Console\Completion\__toString;

class FileController extends Controller
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
    public function store(Request $request)
    {
        $file = new File();
        $file->name =$request->input('name');
        $file->locationId = $request->input('locationId');
        $file->rcpFileNumber = $request->input('rcpFileNumber');
        $file->save();



        $userId = Auth::id();

        $changes = new Change();
        $changes-> fileId = $file->id;
        //testowo
        $changes-> userId = $userId;
        //$changes-> userId = $user::where('rcpNumber','LIKE',$request->rcpNumber)->select('id');
        //$changes-> userId = 1;
        //$changes-> userId = $request->userId;

        $changes-> changeTime = Carbon::now();
        //$changes-> changeTime = '2023-02-25 00:33:18';
        $changes->type=1;
        $changes->description = $request ->description;

        $changes->save();

        return back();
    }
    public function addfile()
    {
        return view("addfile");
    }
    public function returnfile()
    {
        return view("returnfile");
    }
    public function takefile()
    {
        return view("takefile");
    }

    public function takeFilePost(Request $request)
    {

        $userId = Auth::id();



        $changes = new Change();
        $file = DB::table('file')->where('files.rcpFileNumber',$request->fileId)->update(['locationId'=>2]);
        $changes-> fileId = $file->id;
        $changes-> userId = $userId;


        $changes-> changeTime = Carbon::now();
        $changes->type=2;
        $changes->description = $request ->description;


        $changes->save();

        return back();
    }
    public function returnFilePost(Request $request)
    {

        $userId = Auth::id();



        $changes = new Change();
        $file = DB::table('file')->where('files.rcpFileNumber',$request->fileId)->update(['locationId'=>2]);
        $changes-> fileId = $file->id;
        $changes-> userId = $userId;


        $changes-> changeTime = Carbon::now();
        $changes->type=3;
        $changes->description = $request ->description;


        $changes->save();

        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $locations = Location::cursor();
        return view('addfile', compact('locations'));
    }
    public function create2(Request $request)
    {
        $locations = Location::cursor();
        return view('returnfile', compact('locations'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function show(File $file)
    {
       // $files = File::join('locations', 'files.locationId','=','locations.id')::join('changes','files.id','=','changes.fileId')::join('users','changes.userId','=','users.id')->select('files.name as name1','files.rcpFileNumber','locations.name', 'user.id')->get();
        $files = File::join('locations', 'files.locationId','=','locations.id')->select('files.name as name1','files.rcpFileNumber','locations.name')->get();

        return view('files', compact('files'));
    }

//    public function getSession(){
//        $userId=Session::get(userId);
//        return view('\files',['userId'=>$userId]);
//    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function edit(File $file)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, File $file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function destroy(File $file)
    {
        //
    }
}
