<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use App\Transformers\TimestampToDto;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class TimestampController extends Controller
{

    public function __construct()
    {
    }

    public function __invoke()
    {
        return new JsonResponse([
            'time' => TimestampToDto::provideTimestamp()
        ]);
    }
}
