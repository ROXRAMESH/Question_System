<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PageController extends Controller
{
   function addQuote(){
        return view("quotation.add");
   }

   function listQuote(){
    $data = DB::table('orders')->select('orders.*')->get();
    return view("quotation.index",['dataList'=>$data]);
   }

   public function saveOrder(Request $request)
   {
       // Validate the incoming request data
       $validatedData = $request->validate([
           'attention' => 'required',
           'customer' => 'required',
           'project' => 'required',
           'questionDescription' => 'required',
           'itemList' => 'required|array|min:1',
           'itemList.*.description' => 'required',
           'itemList.*.qty' => 'required|numeric|min:1',
           'itemList.*.price' => 'required|numeric|min:0',
       ]);

       // Process the order data and save it to the database
       $orderId = DB::transaction(function () use ($validatedData) {
           $orderId = DB::table('orders')->insertGetId([
               'attention' => $validatedData['attention'],
               'customer' => $validatedData['customer'],
               'project' => $validatedData['project'],
               'question_description' => $validatedData['questionDescription'],
           ]);

           $itemData = [];
           foreach ($validatedData['itemList'] as $item) {
               $itemData[] = [
                   'order_id' => $orderId,
                   'description' => $item['description'],
                   'qty' => $item['qty'],
                   'price' => $item['price'],
               ];
           }

           DB::table('order_items')->insert($itemData);

           return $orderId;
       });

       // Return the order ID as the API response
       return response()->json(['orderId' => $orderId]);
   }

}
