<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\RepairRequest;
use App\Models\Repairs;
class RepairController extends Controller
{
  public function orderRepair(RepairRequest $req) {
    $repair = new Repairs();
    $repair -> name = $req -> input('name');
    $repair -> surname = $req -> input('name-1');
    $repair -> phone = $req -> input('name-2');
    $repair -> problem = $req -> input('message');
    $repair -> save();
    return redirect()->route('cabinet');
  }
    public function allOrderRepairs(){
      $repair = new Repairs;
      return view('lists/list-orders-for-repair',['repair' => $repair->get()->where('status', '=', 'Рассматривается')]);
    }
    public function Okey($id, RepairRequest $req){
      $repair = Repairs::find($id);
      $repair->status = "Принята";
      $repair->save();
      return redirect()->route('list-orders-for-repair');
    }
    public function No($id, RepairRequest $req){
      $repair = Repairs::find($id);
      $repair->status = "Отказано";
      $repair->save();
      return redirect()->route('list-orders-for-repair');
    }
}
