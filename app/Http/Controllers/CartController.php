<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
// use Illuminate\Support\Facades\Facade\Cart;
use App\product;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trending_product = Product::inRandomOrder()->take(4)->get();
        return view('pages.cart' , compact('trending_product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   
        $duplicates = Cart::search(function($cartItem, $rowid) use ($request){
            return $cartItem->$rowid === $request;
        }); 

        if($duplicates->isNotEmpty()){
            return redirect()->route('cart_index')->with('success_message', "Item is already in your cart.");
        }

        Cart::add($request->id, $request->name, 1, $request->price)->associate('App\Product');
        return redirect()->route('cart_index')->with('success_message', 'item was added to your cart.');
    }

    public function empty(){
        Cart::instance('saveForLater')->destroy();
        // Cart::instance()->destroy();

        return redirect('cart_index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return back()->with('success_message','Item has been removed');
    }
    /**
     * Rswith item in shopping cart to save for later
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function saveForLater($id)
    {

     $item = Cart::get($id);
     Cart::remove($id);

     $duplicates = Cart::instance('saveForLater')->search(function($cartItem, $rowid) use ($id){
         return $rowid === $id;
     });
     if($duplicates->isNotEmpty()){
        return redirect()->route('cart_index')->with('success_message', 'item is already saved for later.');
         
     }

     Cart::instance('saveForLater')->add($item->id, $item->name, 1, $item->price)->associate('App\Product');
     return redirect()->route('cart_index')->with('success_message', 'item has been saved for later!');
    }
}
