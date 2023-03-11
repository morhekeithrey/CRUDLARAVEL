<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyInfo;
use App\Models\portfolio;
use Illuminate\Auth\Events\Validated;

class MainPageController extends Controller
{
    public function SendData() {
        $img = new portfolio;
        $alldata = MyInfo::all();
        return view('Section.index', ['Datas' => $alldata])
        -> with('png', $img-> img());
    }


    public function SendInfo() {

        $img = new portfolio;
        return view ('CRUD.index');
    }

    public function NewData(Request $request) {

        $validated = $request->validate([
            'WebName' => ['required'],

        ]);


        MyInfo::create($validated);

        return redirect('/') -> with('message', 'New User created successfully!');
    

    }


    
    public function UpdateData(Request $request, $id) {

        $validated = $request->validate([
            'WebName' => ['required'],

        ]);

        $WebName=MyInfo::find($id);
        $WebName->WebName=$validated['WebName'];
        $WebName->update();
        return redirect('/');

}


  
public function UpdatePage($id) {

return view('CRUD.Update', ['Data'=> MyInfo::findOrFail($id)]);

   

}


public function DeleteData(Request $request, $id) {

    $Data=MyInfo::findOrFail($id);

    $Data->delete();

   
    return redirect('/')->with('message', 'Deleted Successfully');
    
       
    
    }


}