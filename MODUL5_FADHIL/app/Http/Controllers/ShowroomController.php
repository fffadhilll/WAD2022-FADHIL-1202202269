<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Showroom;
use Illuminate\Support\Facades\Storage;

class ShowroomController extends Controller
{
/**
     * @param Request $request
     * @return response
     */
    public function addCar(Request $request)
    {
        $data = $request->all();
        $img = Storage::disk('public')->put('img', $request->file('image'));

        Showroom::create([
            'name' => $data['nama_mobil'],
            'user_id' => $data['user_id'],
            'owner' => $data['owner'],
            'brand' => $data['brand'],
            'purchase_date' => $data['purchase_date'],
            'description' => $data['description'],
            'image' => $img,
            'status' => $data['status'],
        ]);
        return redirect('/list')->with('success', 'Add Car Success');
    }

    /**
     * @return response
     */
    public function showCar(Request $request)
    {
        $showroom = Showroom::all();
        return view('ListCar-Fadhil', ["title"=>"List Mobil"])->with('showroom', $showroom);
    }
    
    /**
     * @param integer $id
     * @return response
     */
    public function carDetail(Request $request, $id)
    {
        $showroom = Showroom::find($id);
        return view('Detail-Fadhil', ["title"=>"Detail Mobil"], compact('showroom'));
    }

    public function carDetailEdit(Request $request, $id)
    {
        $showroom = Showroom::find($id);
        return view('Edit-Fadhil', compact('showroom'));
    }


    /**
     * @param Request $request
     * @param integer $id
     * @return response
     */
    public function editCar(Request $request, $id)
    {
        $showroom = Showroom::find($id);
        $data = $request->all();
        $showroom->owner = $data['owner'];
        $showroom->brand = $data['brand'];
        $showroom->purchase_date = $data['purchase_date'];
        $showroom->description = $data['description'];
        if ($request->hasFile('image')) {
            $img = Storage::disk('public')->put('img', $request->file('image'));
            $showroom->image = $img;
        }
        $showroom->status = $data['status'];
        $showroom->save();
        return redirect('/list')->with('success', 'Edit Car Success');
    }

    /**
     * @param integer $id
     * @return response
     */
    public function deleteCar($id)
    {
        $showroom = Showroom::find($id);
        Storage::disk('public')->delete($showroom->image);
        $showroom->delete();
        return redirect()->back()->with('delete', 'Delete Car Success');
    }
}
