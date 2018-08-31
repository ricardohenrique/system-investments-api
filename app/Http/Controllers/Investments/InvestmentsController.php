<?php

namespace App\Http\Controllers\Investments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvestmentsController extends Controller
{
    public function index()
    {
        $data = ['hehe'];
        return response()->json($data);
    }
}
