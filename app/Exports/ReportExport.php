<?php

namespace App\Exports;

use App\User;
use App\Post;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;



class ReportExport implements FromCollection,WithMapping
{
    //use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::with('posts')->get();
        //return Us er::all();
    }

    public function map($user): array
    {
        return [
            $user->id,
            $user->name,
            $user->lastname,
            $user->post->jenisEdit,
            $user->post->merkEdit,
            $user->post->lokasiEdit,
            $user->post->inventarisEdit,
            $user->post->jangkaWaktu
        ];
    }
}
