<?php

namespace Ashofiq\LogViewer\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Ashofiq\LogViewer\LogViewer;

class LogViewerController extends Controller
{
    public function index(LogViewer $inspire)
    {   
        $quote = $inspire->justDoIt();
        return view('log::index', compact('quote'));
    }
}
