<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Repairs;
use App\Models\Assemblys;
use App\Models\Scools;
use App\Models\SettingsOS;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class MyOrderController extends Controller
{
  public function allMyOrders(){
      $repair = new Repairs;
      $assembly = new Assemblys;
      $scool = new Scools;
      $setting = new SettingsOS;
      $user = Auth::user();
      return view('lists/myorders',[
        'orderrepair' => $repair->get()->where('status', '<>', 'Выполнено')->where('status', '<>', 'Не выполнено')->where('name', '=', $user->name),
        'orderassembly' => $assembly->get()->where('status', '<>', 'Выполнено')->where('status', '<>', 'Не выполнено')->where('name', '=', $user->name),
        'orderscool' => $scool->get()->where('status', '<>', 'Выполнено')->where('status', '<>', 'Не выполнено')->where('name', '=', $user->name),
        'ordersetting' => $setting->get()->where('status', '<>', 'Выполнено')->where('status', '<>', 'Не выполнено')->where('name', '=', $user->name),
      ]);
    }
  public function history(){
        $repair = new Repairs;
        $assembly = new Assemblys;
        $scool = new Scools;
        $setting = new SettingsOS;
        $user = Auth::user();
        return view('lists/history',[
          'orderrepair' => $repair->get()->where('status', '=', 'Выполнено')->where('name', '=', $user->name),
          'orderassembly' => $assembly->get()->where('status', '=', 'Выполнено')->where('name', '=', $user->name),
          'orderscool' => $scool->get()->where('status', '=', 'Выполнено')->where('name', '=', $user->name),
          'ordersetting' => $setting->get()->where('status', '=', 'Выполнено')->where('name', '=', $user->name),
      ]);
    }
  public function denaid(){
          $repairdenaid = new Repairs;
          $assemblydenaid = new Assemblys;
          $scooldenaid = new Scools;
          $settingdenaid = new SettingsOS;
          $user = Auth::user();
          return view('lists/denaid',[
            'repairdenaid' => $repairdenaid->get()->where('status', '=', 'Не выполнено')->where('name', '=', $user->name),
            'assemblydenaid' => $assemblydenaid->get()->where('status', '=', 'Не выполнено')->where('name', '=', $user->name),
            'scooldenaid' => $scooldenaid->get()->where('status', '=', 'Не выполнено')->where('name', '=', $user->name),
            'settingdenaid' => $settingdenaid->get()->where('status', '=', 'Не выполнено')->where('name', '=', $user->name),
        ]);
      }
    public function DoneAssembly($id, Request $req){
      $assembly = Assemblys::find($id);
      $assembly->status = "Выполнено";
      $assembly->save();
      return redirect()->route('myorders');
    }
    public function DoneRepair($id, Request $req){
      $repair = Repairs::find($id);
      $repair->status = "Выполнено";
      $repair->save();
      return redirect()->route('myorders');
    }
    public function DoneScool($id, Request $req){
      $scool = Scools::find($id);
      $scool->status = "Выполнено";
      $scool->save();
      return redirect()->route('myorders');
    }
    public function DoneSettingsOS($id, Request $req){
      $setting = SettingsOS::find($id);
      $setting->status = "Выполнено";
      $setting->save();
      return redirect()->route('myorders');
    }
    public function denaidAssembly($id, Request $req){
      $assembly = Assemblys::find($id);
      $assembly->status = "Не выполнено";
      $assembly->save();
      return redirect()->route('myorders');
    }
    public function denaidRepair($id, Request $req){
      $repair = Repairs::find($id);
      $repair->status = "Не выполнено";
      $repair->save();
      return redirect()->route('myorders');
    }
    public function denaidScool($id, Request $req){
      $scool = Scools::find($id);
      $scool->status = "Не выполнено";
      $scool->save();
      return redirect()->route('myorders');
    }
    public function denaidSettingsOS($id, Request $req){
      $setting = SettingsOS::find($id);
      $setting->status = "Не выполнено";
      $setting->save();
      return redirect()->route('myorders');
    }
    public function deleteAssembly($id){
      Assemblys::find($id)->delete();
      return redirect()->route('myorders');
    }
    public function deleteRepair($id){
      Repairs::find($id)->delete();
      return redirect()->route('myorders');
    }
    public function deleteScool($id){
      Scools::find($id)->delete();
      return redirect()->route('myorders');
    }
    public function deleteSettingsOS($id){
      SettingsOS::find($id)->delete();
      return redirect()->route('myorders');
    }
}
