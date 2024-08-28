<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Ticket;
use App\Models\Inventory;

use Illuminate\Support\Facades\Auth;

class HostController extends Controller
{
    public function index(){
        $data = Ticket::all();
        return view('allTicket', compact('data'));
    }

    public function createPriority($id){
        $data = Ticket::find($id);
        $priority = request()->priority;
        $data->update([
            'priority'=>$priority,
        ]);

        return to_route('admin.index');
    }

    public function invIndex(){
        $data = Inventory::all();
        return view('inventory.index', compact('data'));
    }

    public function updateQty($id) {
        $part = Inventory::find($id);
        $part->qty = request()->qty;
        $part->save();

        return to_route('inventory.index');
    }

}
