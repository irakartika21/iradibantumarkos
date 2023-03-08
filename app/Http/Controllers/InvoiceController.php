<?php

namespace App\Http\Controllers;
use App\Models\Member;
use App\Models\Paket;
use App\Models\Transaksi;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $transaksis = Transaksi::all();
        $pakets = Paket::all();
        $members = Member::all();
        return view('invoice.index', compact('members','transaksis','pakets'));
    }
}
