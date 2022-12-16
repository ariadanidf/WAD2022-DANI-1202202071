<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Showroom;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class ShowroomController extends Controller
{
    public function index()
    {
        $products=Showroom::orderBy('id','desc')->get();
        return view('ListCar-Dani', compact('products'));
    }

    public function create()
    {
        return view('Add-Dani');
    }

    public function stored(Request $request)
    {   
        $imgName = $request->img_path->getClientOriginalName() . '-' . time() 
                    . '.' . $request->img_path->extension();
        $request->img_path->move(public_path('image'), $imgName);
        $user = User::find(Auth::id());
        Showroom::create([
            'name' => $request -> name,
            'user_id' => $request ->user_id,
            'owner' => $request -> owner,
            'brand' => $request -> brand,
            'purchase_date' => $request -> purchase_date,
            'description' => $request -> description,
            'image' => $imgName,
            'status' => $request -> status,
        ]);

        return redirect('/product');
    }

    public function detail(){
        $product = Showroom::all();
        return view('Detail-Dani', compact('product'));
    }

    public function edit($id)
    {
        $product = Showroom::find($id);
        
        return view('Edit-Dani', compact('product')); 
    }

    public function update(Request $request, $id)
    {
        $product = Showroom::find($id);

        $imgName = $product->img_path;
        if ($request->img_path) {
            $imgName = $request->img_path->getClientOriginalName() . '-' . time() 
                        . '.' . $request->img_path->extension();
            $request->img_path->move(public_path('image'), $imgName);
        }

        Showroom::find($id)->update([
            'nama' => $request -> name,
            'harga' => $request -> price,
            'gambar' => $imgName
        ]);

        return redirect('ListCar-Dani');
    }

    public function destroy($id)
    {   

        Showroom::find($id)->delete();

        return redirect('/product');  
    }
}
