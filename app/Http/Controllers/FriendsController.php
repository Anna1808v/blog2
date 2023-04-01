<?php

namespace App\Http\Controllers;

use App\Friend;
use Illuminate\Http\Request;

class FriendsController extends Controller
{
    public function index()
    {
        $friends = Friend::find(1);
        dd($friends->name);
    }

    public function create()
    {
        Friend::create([
            'name' => 'Анастасия',
            'birthday' => '05.06.1986',
            'age' => 36,
            'phone_number' => '0953897546'
        ]);
        dd('created');
    }

    public function update()
    {
        $friend = Friend::find(3);
        $friend->update([
            'name' => 'Оля'
        ]);
        dd('updated');
    }

    public function delete()
    {
        //$friend = Friend::find(3);
        // $friend->delete();
        // dd('deleted');

        $friend = Friend::withTrashed()->find(3);
        $friend->restore();
        dd('restored');

    }

    public function firstOrCreate()
    {
        $newArr = [
            'name' => 'Мирослава',
            'birthday' => '16.03.1986',
            'age' => 36,
            'phone_number' => '095174125'
        ];

        $pattern = [
            'name' => 'Мирослава'
        ];

        Friend::firstOrCreate($pattern, $newArr);

        dd('finished');
    }

    public function updateOrCreate()
    {
        $newArr = [
            'name' => 'Aля',
            'birthday' => '16.03.1987',
            'age' => 35,
            'phone_number' => '0995556633'
        ];

        $pattern = [
            'name' => 'Анастасия'
        ];

        Friend::updateOrCreate($pattern, $newArr);
        dd('finished');
    }
}
