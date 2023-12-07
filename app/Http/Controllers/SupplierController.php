<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSupplierRequest;
use App\Http\Requests\UpdateSupplierRequest;
use App\Models\Supplier;
use Inertia\Inertia;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supplier = Supplier::orderBy('created_at', 'desc')->get();

        return Inertia::render('Supplier/Index', [
            "supplier"      => $supplier
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Supplier/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            "name"      => "required|string|max:120",
            "address"   => "string|max:255",
            "contact"   => "numeric",
            "email"     => "email:dns|max:120"
        ]);

        $supplier = Supplier::create([
            "name"      => $request->name,
            "address"   => $request->address,
            "contact"   => $request->contact,
            "email"     => $request->email,
        ]);

        event(new Registered($supplier));

        return redirect('/supplier');
    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supplier $supplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSupplierRequest $request, Supplier $supplier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supplier $supplier)
    {
        //
    }
}
