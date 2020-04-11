<?php

namespace App\Http\Controllers\Api;

use App\Address;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\AddressResource;

class AddressController extends Controller
{
    public function index(){
        return AddressResource::collection(Address::paginate());
    }
}
