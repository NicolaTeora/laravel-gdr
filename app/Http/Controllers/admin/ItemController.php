<?php

namespace App\Http\Controllers\admin;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ItemController extends Controller
{
    public function index()
    {
        $items = Item::paginate(20);
        return view("admin.weapons.weapons", compact("items"));
    }
}
