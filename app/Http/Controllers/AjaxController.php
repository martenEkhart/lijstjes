<?php




use App\Http\Requests;
use App\Http\Controllers\Controller;

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function index(){
        
        $msg = "Geef ons mooie cadeautjes alstublieft!";
        return response()->json(array('msg'=> $msg), 200);
    
     }
}
