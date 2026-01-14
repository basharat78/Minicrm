<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class MainController extends Controller
{
    public function index(){
        return view('index');
    }
    public function dashboard(){
       
    $totalClients = Client::count();
    $recentClients = Client::latest()->take(5)->get();
    $monthClients = Client::whereMonth('created_at', date('m'))->count();
    $weekClients = Client::whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->count();
    
   return view('dashboard', compact('totalClients', 'recentClients', 'monthClients', 'weekClients'));
    }

}
