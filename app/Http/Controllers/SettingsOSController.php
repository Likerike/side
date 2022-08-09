<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\SettingsOSRequest;
use App\Models\SettingsOS;
class SettingsOSController extends Controller
{
  public function orderSettingsOS(SettingsOSRequest $req) {
    $setting = new SettingsOS();
    $setting -> name = $req -> input('name');
    $setting -> surname = $req -> input('name-1');
    $setting -> phone = $req -> input('name-2');
    $setting -> service = $req -> input('select');
    $setting -> save();
    return redirect()->route('cabinet');
  }
  public function allOrderSettingsOS(){
      $setting = new SettingsOS;
      return view('lists/list-orders-for-setings-OS',['setting' => $setting->get()->where('status', '=', 'Рассматривается')]);
  }
  public function Okey($id, SettingsOSRequest $req){
    $setting = SettingsOS::find($id);
    $setting->status = "Принята";
    $setting->save();
    return redirect()->route('list-orders-for-setings-OS');
  }
  public function No($id, SettingsOSRequest $req){
    $setting = SettingsOS::find($id);
    $setting->status = "Отказано";
    $setting->save();
    return redirect()->route('list-orders-for-setings-OS');
  }
}
