<?php

namespace App\Http\Controllers;

use Illuminate\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\Ponto;

class ApiController extends Controller
{
    
   
    private $ponto;

    public function __construct(Ponto $p)
    {
    	$this->ponto = $p;
    }

    public function index()
    {
    	$ret = $this->ponto->all();
    	print_r($ret->toJson());
    }


    public function getPonto($id)
    {
    	$ret = $this->ponto->find($id);
    	print_r($ret->toJson());
    }


}
