<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SalarieController extends Controller
{
    public function index() {
        $jobs = Job::paginate(10);

        return view('salaries.index', compact('jobs'));
    }
}
