<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function getContacts(): JsonResponse
    {
        $contacts = ContactModel::all();
        return response()->json($contacts);
    }

    public function delContact(Request $request): JsonResponse
    {
        ContactModel::destroy($request->id);
        return response()->json(["Message" => "Success."]);
    }

    public function addContact(Request $request): JsonResponse
    {
        $contact = new ContactModel();
        $contact->name = $request->name;
        $contact->surname = $request->surname;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->save();
        return response()->json($contact);
    }

    public function editContact(Request $request): JsonResponse
    {
        $contact = ContactModel::find($request->id);
        if ($request->name) $contact->name = $request->name;
        if ($request->surname) $contact->name = $request->surname;
        if ($request->phone) $contact->name = $request->phone;
        if ($request->email) $contact->name = $request->email;
        $contact->save();
        return response()->json($contact);
    }
}
