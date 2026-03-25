<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Employer;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function index() {
        $employers = Employer::paginate(10);

        return view('companies.index', ['employers' => $employers]);
    }
}
