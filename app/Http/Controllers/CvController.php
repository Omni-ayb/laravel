<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use App\Models\Experience;
use Illuminate\Http\Request;
use App\Http\Requests\CvRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\UploadedFile;
class CvController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    } 
    // afficher list cvs
    public function index(){
        if(Auth::user()->is_admin)
        {$listCv=Cv::all();}
        else {
            $listCv=Auth::user()->cvs;
        }
        return view('cv.index',['cvs'=>$listCv]);
    }

    // creer un nv cv
    public function create() {
        return view('cv.create');
    }

    //sauvegarder un cv dans la bd
    public function store (CvRequest $request) {
        $cv=new Cv();
        $cv->titre=$request->input('titre');
        $cv->presentation=$request->input('presentation');
        $cv->user_id=Auth::user()->id;
        if($request->hasFile('photo')) {
            $cv->photo=$request->photo->store('images');
            }    
        $cv->save();
        session()->flash('success','cv is added successfully');
        return redirect ('cvs');
    }
    //affihcer cv pour edition
    public function edit($id){
        $cv=Cv::find($id);
        $this->authorize('update',$cv);
        return view('cv.edit',['cv'=>$cv]);
    }

    //modifier un cv
    public function update($id,CvRequest $request)
    {
        $cv=Cv::find($id);
        $cv->titre=$request->input('titre');
        $cv->presentation=$request->input('presentation');
        if($request->hasFile('photo')) {
            $cv->photo=$request->photo->store('images');
            }    
        $cv->save();
        return redirect('cvs');

    }
    
    //supprimer un cv
    public function destroy($id,Request $request){
        $cv=Cv::find($id);
        $cv->delete();
        return redirect('cvs');
        //return $request->all();
    }

    public function show($id)
    {
        return view('cv.show',['id'=>$id]);
    }

    public function getExp()
    {
        $exp=Experience::all();
        return $exp;

    }
}
