<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\AssemblyRequest;
use App\Models\Assemblys;
class AssemblyController extends Controller
{
  public function orderAssemblys(AssemblyRequest $req) {
    $assembly = new Assemblys();
    $assembly -> name = $req -> input('name');
    $assembly -> surname = $req -> input('name-1');
    $assembly -> phone = $req -> input('name-2');
    $assembly -> cpu = $req -> input('select');
    $assembly -> ram = $req -> input('select-1');
    $assembly -> hdd = $req -> input('select-2');
    $assembly -> video = $req -> input('select-3');
    $assembly -> save();
    return redirect()->route('cabinet');
  }
  public function allorderAssemblys(){
      $assembly = new Assemblys;
      return view('lists/list-orders-for-assembly',['assembly' => $assembly->get()->where('status', '=', 'Рассматривается')]);
  }
  public function orderOkey($id, AssemblyRequest $req){
    $assembly = Assemblys::find($id);
    $assembly->status = "Принята";
    $assembly->save();
    return redirect()->route('list-orders-for-assembly');
  }
  public function orderNo($id, AssemblyRequest $req){
    $assembly = Assemblys::find($id);
    $assembly->status = "Отказано";
    $assembly->save();
    return redirect()->route('list-orders-for-assembly');
  }
}
