<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Datatables;

class DatatableController extends Controller
{
    public function allData()
    {
        dd("Fdsafads");
        return Datatables::of(User::query())->make(true);
    }

    public function getIndex(Type $var = null)
    {
        # code...
    }
}
