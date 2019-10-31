<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pizza;
class PizzaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addPizza(Request $request)
    {
        if($request->isMethod('GET')){

            return view('admin.addPizza');

        }else if($request->isMethod('POST')){

            $image_name = $this->uploadImage($request);
            Pizza::create(['name'=>$request->name,'price'=>$request->price,'category'=>$request->pizza_category,'picture'=>$image_name]);
            return back()->with('success','Pizza Created Successfully');
        }
    }

    public function managePizza(Request $request)
    {
        $pizza = Pizza::all();
        return view('admin.managePizza',compact('pizza'));
    }

    public function getPizza(Request $request,$id = null)
    {
        $pizza = Pizza::find($request->id)->first();
        return response()->json(array('pizza' => $pizza));
    }

    public function updatePizza(Request $request)
    {
        if ($request->hasfile('pizza_picture')) {
            try {

                $pizza = Pizza::find($request->id)->first();
                Storage::delete('public/uploads/' . $pizza->picture);

            } catch (Exception $e) {
                //
            } finally {

                $image_name = $this->uploadImage($request);
                Pizza::where(['id' => $request->id])->update(['name'=>$request->name,'price'=>$request->price,'category'=>$request->pizza_category,'picture'=>$image_name]);
                
                return back()->with('success', 'Pizza Edit was successful');
            }

        } else {

            Pizza::where(['id' => $request->id])->update(['name'=>$request->name,'price'=>$request->price,'category'=>$request->pizza_category]);
            return back()->with('success', 'Pizza Edit was successful');
        }
    }

    public function deletePizza(Request $request){

        Pizza::find($request->id)->delete();
        return response()->json(array('message' => 'Pizza Deleted'));
    }

    public function uploadImage($request)
    {
        //upload discription image 
        $extension = $request->file('pizza_picture')->getClientOriginalExtension();
        $new_image_name = round(microtime(true)) . '.' . $extension;

        $request->file('pizza_picture')->storeAs(
            'public/uploads', $new_image_name
        );

        return $new_image_name;
    }

}
