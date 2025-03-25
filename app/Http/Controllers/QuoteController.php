<?php

namespace App\Http\Controllers;

use App\Models\Quote;



use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function index()
    {
        
        $randomQuote = Quote::inRandomOrder()->first();

        return view('user.index', [
            'heading' => 'Random Quote of the Day',
            'quote' => $randomQuote
        ]);
    }

    public function about(){
        return view('user.about'); 
    }

    public function show(String $id)
    {
        $randomQuote = Quote::find($id);

        return view('user.index', [
            'heading' => 'Random Quote of the Day',
            'quote' => $randomQuote
        ]);
    }


    public function like(Request $request, Quote $quote)
    {
        
        $quote->likes += 1;
        $quote->save();

        
       return $this->show($quote->id);
    }

    public function comment(Request $request, String $id){
          $quote = Quote::findOrFail($id);
 $comment = $request->input('commentText');

    
   
    $quote->comments = $comment;

    
    $quote->save();



        return $this->show($quote->id);
    }

    

 



}