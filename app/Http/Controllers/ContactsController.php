<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('contact')->with('contacts' , $contacts);
    }

    public function indexApi()
    {
        $contacts = Contact::all();
        return response()->json(['contacts' , $contacts]);
    }

    public function create()
    {
        return view('AddContact');
    }
    public function store(Request $request)
    {
        $contacts = new Contact();
        $contacts->names = $request->input('name');
        $contacts->email = $request->input('email');
        $contacts->contact = $request->input('contact');
        $contacts->location = $request->input('location');
        $contacts->save();
        return redirect()->route('contact')->with('success','contact saved successfully');
    }

    public function edit($id)
    {
        $contact= Contact::find($id);
        return view('editContact')->with('contact',$contact);
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);
        $contact->names = $request->input('name');
        $contact->email = $request->input('email');
        $contact->contact = $request->input('contact');
        $contact->location = $request->input('location');
        $contact->update();
        return redirect()->route('contact')->with('success','contact saved successfully');
    }

    public function updateApi(Request $request, $id)
    {
        $contact = Contact::find($id);
        $contact->names = $request->input('name');
        $contact->email = $request->input('email');
        $contact->contact = $request->input('contact');
        $contact->location = $request->input('location');
        $contact->update();
        return response()->json(['message' => 'Product Updated Successfully']);
    }

    public function delete($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->route('contact')->with('success','contact saved successfully');
    }
}
