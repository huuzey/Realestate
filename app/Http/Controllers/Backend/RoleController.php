<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleController extends Controller
{
    public function AllPermission() {
        $permission= Permission::all();
        return view("backend.pages.permission.all_permission",compact("permission"));
    }
    public function AddPermission() {
        return view("backend.pages.permission.add_permission");
    }
    public function StorePermission(Request $request) {
        $permission= Permission::create([
            "name"=>$request->name,
            "group_name"=>$request->group_name,
        ]);  

        $notification= array(
            "message"=> "Permission created successfully",
            "alert-type"=>"success"
           );
           return redirect()->route('all.permission')->with($notification);

    }       
    public function UpdatePermission(Request $request) {
        $perid=$request->id;
         Permission::findOrFail($perid)->update([
            "name"=>$request->name,
            "group_name"=>$request->group_name,
        ]);  

        $notification= array(
            "message"=> "Permission updated successfully",
            "alert-type"=>"success"
           );
           return redirect()->route('all.permission')->with($notification);

    }       
    public function EditPermission($id) {
        $permission= Permission::findOrFail($id);
        return view("backend.pages.permission.edit_permission",compact("permission"));

        
    }
    public function DeletePermission($id){
        Permission::findOrFail($id)->delete();
        $notification= array(
            "message"=> "Permission deleted successfully",
            "alert-type"=>"success"
           );
           return redirect()->back()->with($notification);

    }
    //
}
