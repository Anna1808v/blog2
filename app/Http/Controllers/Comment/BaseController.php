<?php
namespace App\Http\Controllers\Comment;

use App\Services\Comment\Service;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

}