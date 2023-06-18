<?php
namespace App\Http\Controllers\Admin\Comment;

use App\Http\Controllers\Controller;
use App\Services\Comment\Service;

class BaseController extends Controller
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
