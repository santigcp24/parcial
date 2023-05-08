<?php

namespace App\Http\Controllers;
use App\Models\Sale;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class SalesController extends Controller
{
    public function index()
    {
        $ventas = Sale::all();
        return $ventas; 
    }


    public function store(Request $request)
    {
        $venta =  new Sale();
        $venta ->nameSales = $request->nameSales; 
        $venta ->nameClient = $request->nameClient;
        $venta ->nameProduct = $request->nameProduct;
        $venta ->price = $request->price;
        $venta ->dateSale = $request->dateSale;
        $venta ->save();
    }

    public function show($id)
    {
        $venta = Sale::find($id);
        return $venta;
    }


    public function update(Request $request, $id)
    {
        $venta = Sale::findorFail(); 
        $venta ->nameSales = $request->nameSales; 
        $venta ->nameClient = $request->nameClient;
        $venta ->nameProduct = $request->nameProduct;
        $venta ->price = $request->price;
        $venta ->dateSale = $request->dateSale;
        $venta ->save();
    }

    public function destroy($id)
    {
          $venta = Sale::destroy($id);
          return $venta;
    }

}