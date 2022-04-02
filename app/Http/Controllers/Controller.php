<?php

namespace App\Http\Controllers;

use App\Repositories\Repository;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Carbon\Carbon; // Include Class in COntroller

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->repository = new Repository();
    }

    public function home()
    {
        $person = $this->repository->getPerson()[0];

        $age = Carbon::parse($person->birthday)->diff(Carbon::now())->y;

        $phone = str_replace(' ', '', $person->phone);
        // dd($phone);
        
        return view('home', ['person'=>$person, 'age'=>$age, 'phone'=>$phone]);
    }
}
