<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class AdminController extends Controller {
    public function dashboard(){
        $foods = Food::paginate(20);

        $data = [
            'foods' => $foods
        ];

        return view('admin.dashboard', $data);
    }
}
