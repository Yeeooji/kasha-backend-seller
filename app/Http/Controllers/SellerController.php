<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;

class SellerController extends Controller
{
    public function showSellers(){

        $sellers = Seller::all();
        return view('sellers.display-seller',['sellers' => $sellers]);
    }
    public function createSeller(){
        return view('sellers.create-seller');
    }
    public function store(Request $request){

        Seller::create([
            'lname' => $request->lname,
            'fname' => $request->fname,
            'password' => $request->password
        ]);
        
        return redirect('/');
    }
    public function updateSeller(Request $request){
        return view('sellers.update-seller',['seller' =>$request]);
    }

    public function update(Seller $seller, Request $request)
    {
        $seller->update($request->all());
        return redirect('/');
    }

    public function delete(Seller $seller)
    {
        $seller->delete();

        return redirect('/');
    }
}