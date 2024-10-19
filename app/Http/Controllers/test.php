<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class test extends Controller
{
    public function index():
    {
        $persons = Person::all(); // Получаем все продукты из базы данных
        return view('nepridymal', compact('persons'));
    }
}
