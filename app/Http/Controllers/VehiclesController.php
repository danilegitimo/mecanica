<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehiclesController extends Controller {
  
  public function index() {
    return view('vehicles/index', [
      'vehicles' => Vehicle::all()
    ]);
  }

  public function create() {
    return view('vehicles/form');
  }

}
