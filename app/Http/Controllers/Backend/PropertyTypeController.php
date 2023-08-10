<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Amenitis;
use App\Models\PropertyType;
use Illuminate\Http\Request;

class PropertyTypeController extends Controller
{
    public function AllType() {
        $types= PropertyType::latest()->get();
        return view("backend.type.all_type",compact("types"));
    }
    public function AddType() {
        return view("backend.type.add_type");
    }
    public function StoreType(Request $request) {
        // $request->validate([
        //     "type_name" => "required|unique::property_types|max:200",
        //     "type_icon" => "required"
        //    ]);

           PropertyType::insert([
            "type_name" => $request->type_name,
            "type_icon"=>$request->type_icon

           ]);
           $notification= array(
            "message"=> "Property type created successfully",
            "alert-type"=>"success"
           );
           return redirect()->route("all.type")->with($notification);
    }
    public function UpdateType(Request $request) {
        // $request->validate([
        //     "type_name" => "required|unique::property_types|max:200",
        //     "type_icon" => "required"
        //    ]);
$pid= $request->id;
           PropertyType::findOrFail($pid)->update([
            "type_name" => $request->type_name,
            "type_icon"=>$request->type_icon

           ]);
           $notification= array(
            "message"=> "Property type updated successfully",
            "alert-type"=>"success"
           );
           return redirect()->route("all.type")->with($notification);
    }
    //
    public function EditType( $id ){
        $types= PropertyType::findOrFail($id);

        return view("backend.type.edit_type",compact("types"));
    }
   
    public function DeleteType($id){
        PropertyType::findOrFail($id)->delete();
        $notification= array(
            "message"=> "Property type deleted successfully",
            "alert-type"=>"success"
           );
           return redirect()->back()->with($notification);
    }
    public function AllAmenetie(){
        $types= Amenitis::latest()->get();
        return view("backend.ameneties.all_ameneties",compact("types"));


    }
    public function AddAmenetie(){
            return view("backend.ameneties.add_ameneties");


    }
    public function StoreAmenetie(Request $request) {
        // $request->validate([
        //     "type_name" => "required|unique::property_types|max:200",
        //     "type_icon" => "required"
        //    ]);

           Amenitis::insert([
            "amenities_name" => $request->amenities_name,

           ]);
           $notification= array(
            "message"=> "Ameneties created successfully",
            "alert-type"=>"success"
           );
           return redirect()->route("all.amenetie")->with($notification);
    }
    public function  EditAmenetie($id)  {
        $ameneties= Amenitis::findOrFail($id);

        return view("backend.ameneties.edit_ameneties",compact("ameneties"));
    }
    public function UpdateAmenetie(Request $request) {
        // $request->validate([
        //     "type_name" => "required|unique::property_types|max:200",
        //     "type_icon" => "required"
        //    ]);
        $ame_id=  $request->id;

           Amenitis::findOrFail($ame_id)->update([
            "amenities_name" => $request->amenities_name,

           ]);
           $notification= array(
            "message"=> "Ameneties updated successfully",
            "alert-type"=>"success"
           );
           return redirect()->route("all.amenetie")->with($notification);
    }
    public function DeleteAmenetie($id){
        Amenitis::findOrFail($id)->delete();
        $notification= array(
            "message"=> "Amenetis deleted successfully",
            "alert-type"=>"success"
           );
           return redirect()->back()->with($notification);
    }
}   
