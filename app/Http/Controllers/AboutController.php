<?php

namespace HD\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


use DB;

class AboutController extends Controller
{
    //

    public function show() {

		if(view()->exists('default.about')) {

      $pages = DB::select("SELECT * FROM `pages` WHERE `alias`=:alias",['alias'=>'about']);

			return view('default.about')->withPage($pages[0])->withTitle('About our company');

				}
		abort(404);
	}

}
