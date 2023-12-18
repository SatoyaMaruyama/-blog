<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;

class RecordController extends Controller
{
    public function index(Record $record)
{
    return view('records.index')->with(['posts' => $record->getByCategory()]);
}
}
