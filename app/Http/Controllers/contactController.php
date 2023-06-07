<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class contactController extends Controller
{
    public function index()
    {
        $title="Add Contact";
        $Contact=new contact;
        $url=url('contact/storeinfo');
        $data=compact('url','title','Contact');
        return view('contact')->with($data);
    }
    public function storeinfo(Request $req)
    {
        $c= new contact;
        $c->name=$req['name'];
        $c->phone_number=$req['phone_number'];
        $c->email=$req['email'];
        $c->query=$req['query'];
        $c->save();
        return redirect('/contact/viewinfo');
    }
    public function viewinfo()
    {
        $Contact= contact::all();
        $data=compact('Contact');
        return view('admin/viewContact')->with($data);
    }
    public function delete($id)
    {
        $Contact=contact::find($id);
        if(!is_null($Contact))
        {
            $Contact->delete();
        }
        return redirect('contact/viewinfo');
    }
    public function edit($id)
    {
        $Contact=contact::find($id);
        if(is_null($Contact))
        {
            return redirect('contact/viewinfo');
        }
        else
        {
            $title="Update Contact";
            $url=url('/contact/update')."/".$id;
            $data=compact('Contact','url','title');
            return view('contact')->with($data);
        }
    }
    public function update($id,Request $req)
    {
        $c=contact::find($id);
        $c->name=$req['name'];
        $c->phone_number=$req['phone_number'];
        $c->email=$req['email'];
        $c->query=$req['query'];
        $c->save();
        return redirect('/contact/viewinfo');
    }
    
}