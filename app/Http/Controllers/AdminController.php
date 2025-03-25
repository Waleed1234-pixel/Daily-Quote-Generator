<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;



class AdminController extends Controller
{


    public function register(){
        return view('admin.adminReg');
    }

    

    public function index(){
         return view('admin.adminindex'); 
    }

    public function about(){
         return view('admin.about'); 
    }

   

    public function fetchquotes()
    {
        $quotes = Quote::all(); 

        return view('admin.view', ['quotes' => $quotes]);
    }

    public function addquotes(){

    return view('admin.addquote');

    }

    public function store(Request $request)
    {
        
    
    $request->validate([
        'content' => 'required|string',
        'author' => 'required|string',
    ]);

   
    Quote::create([
        'content' => $request->input('content'),
        'author' => $request->input('author'),
    ]);

    
      return redirect()->route('admin.dashboard')->with('success', 'Quote added successfully!');
    }

   
    public function edit($id)
    {
         $quote = Quote::find($id);
    return view('admin.edit', ['quote' => $quote]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $quote = Quote::findOrFail($id);

    // Update the content if it's provided in the request
    if ($request->has('content')) {
        $quote->content = $request->input('content');
    }

  
    if ($request->has('author')) {
        $quote->author = $request->input('author');
    }

   
    $quote->save();

 
    return redirect()->route('admin.dashboard', ['id' => $quote->id])->with('success', 'Quote updated successfully');
}








    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
  $quote = Quote::find($id);
    $quote->delete();
    return redirect()->route('admin.dashboard')->with('success', 'Quote deleted successfully');
    }
}

