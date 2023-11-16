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
}
