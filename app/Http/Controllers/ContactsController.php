<?php
/**
 * Created by PhpStorm.
 * User: fulgen
 * Date: 16/04/18
 * Time: 20:32
 */

namespace App\Http\Controllers;


use App\Contact;
use App\Http\Requests\StorePostRequest;

class ContactsController extends Controller
{
    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->get();
        return view('contacts.index')->with('contacts', $contacts);
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function store(StorePostRequest $request)
    {
        $contact = new Contact;
        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        $contact->save();

        return redirect('/')->with('success', 'Contacto creado');
    }

    public function show($id)
    {
        $contact = Contact::find($id);
        return view('contacts.show', compact('contact'));
    }

    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('contacts.edit', compact('contact'));
    }

    public function update(StorePostRequest $request, $id)
    {
        $contact = Contact::find($id);
        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->email = $request->last_name;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        $contact->save();

        return redirect('/')->with('success', 'Contacto actualizado');

    }

    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();

        return redirect('/')->with('success', 'Contacto borrado');
    }
}