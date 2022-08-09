<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\ScoolRequest;
use App\Models\Scools;
class ScoolControllero extends Controller
{
  public function orderScools(ScoolRequest $req) {
    #dd($req);
    $scool = new Scools();
    $scool -> name = $req -> input('name');
    $scool -> surname = $req -> input('name-1');
    $scool -> phone = $req -> input('name-2');
    $scool -> scool = $req -> input('text');
    $scool -> options = $req -> input('textarea');
    $scool -> save();
    return redirect()->route('cabinet');
  }
  public function allOrderScool(){
      $scool = new Scools;
      return view('lists/list-orders-for-scool',['scool' => $scool->get()->where('status', '=', 'Рассматривается')]);
  }
  public function Okey($id, ScoolRequest $req){
    $scool = Scools::find($id);
    $scool->status = "Принята";
    $scool->save();
    return redirect()->route('list-orders-for-scool');
  }
  public function No($id, ScoolRequest $req){
    $scool = Scools::find($id);
    $scool->status = "Отказано";
    $scool->save();
    return redirect()->route('list-orders-for-scool');
  }
}
