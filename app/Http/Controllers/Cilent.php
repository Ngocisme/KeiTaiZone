<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cilent extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showHome()
    {
        return view('User.index');
    }
    public function showCart()
    {
        return view('User.cart');
    }
    public function showCheckOut()
    {
        return view('User.checkout');
    }
    public function showContact()
    {
        return view('User.contact');
    }
    public function showDetail()
    {
        return view('User.detail');
    }
    public function showShop()
    {
        return view('User.shop');
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
