<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class IscrizioneController extends Controller
{
public function registration(Request $request){
$email = $request->email;
$username = $request->username;
$number = $request->number;

$person = new Person();

$person->email = $email;
$person->username = $username;
$person->number = $number;


$person->save();

return redirect()->back();

}

public function index(){

return view('product.index');
}
}
