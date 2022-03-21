<?php

namespace App\Http\Controllers;

use App\Models\Bil;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BilarController extends Controller
{
	public function index() {
		$posts = Bil::all();
		return $posts;
	}

}
