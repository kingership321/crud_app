<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Registeredtable;
use Illuminate\Http\Request;

class NewregisterController extends Controller
{


    
    public function show()
    {
        return view('newregister');
    }



    public function insertregu(RegisterRequest $req)
    {
        
        $regu = new Registeredtable;
        $regu->email = $req->email;
        $regu->password = $req->password;
        $regu->confirm_password = $req->confirm_password;
        $regu->address = $req->address;
        $regu->phone = $req->phone;
        $regu->save();
        // dd($req->all());
        return redirect('pageafterregister')->with('status','User has been registered!');
    }



    public function regushow(){
        $regus = Registeredtable::all();
        return view('pageafterregister',['regus'=>$regus]);
    }

    
    public function updatepage($id)
    {
        $regu = Registeredtable::findOrFail($id);
        
        return view('updatepage',compact('regu'));        
    }
    
    public function inserteditdata(Request $request, $id)
    {
        // dd($id);
        $regui = Registeredtable::where('id', $id)->first();
        $regui->email = $request->email;
        $regui->address = $request->address;
        $regui->phone = $request->phone;
        $regui->save();
        return redirect('/pageafterregister');
    }
        public function softdeletedata($id) {
            $model = Registeredtable::find( $id );
        $model->delete();
            return redirect('/pageafterregister');

        }
        public function deletedata($id) {
        Registeredtable::onlyTrashed()->where('id', $id)->forceDelete();
        return redirect()->back();

        }
        public function regrestore($id) {
        Registeredtable::onlyTrashed()->where('id', $id)->restore();
            return redirect('/pageafterregister');

        }
        public function regrestoreAll() {
        Registeredtable::onlyTrashed()->restore();
        return redirect('/pageafterregister');
        }
        public function showdeleted(){
            $model = Registeredtable::onlyTrashed()->get();

        return view('restore', compact('model'));
        }
}
