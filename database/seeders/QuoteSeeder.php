<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Quote;

class QuoteSeeder extends Seeder
{
    
    public function run(): void
    {
        Quote::create([
            'content' => 'Life is never fair and perhaps it is a good thing for most of us that it is not.',
            'author' => 'Oscar Wilde',
        ]);

        Quote::create([
            'content' => 'Life is a journey not a destination.',
            'author' => 'Ralph Waldo Emerson',
        ]);
    }
}
