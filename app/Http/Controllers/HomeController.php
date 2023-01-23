<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;

class HomeController extends Controller
{
    public function index() {
        $allWorks = Work::query()->orderBy('wokr_class')->get();
        $categoriedWorks = [];

        foreach ($allWorks as $wr) {
            $categoriedWorks[$wr->wokr_class][] = $wr;
        }

        return view('index',[
            "works" => $categoriedWorks,
        ]);
    }
}
