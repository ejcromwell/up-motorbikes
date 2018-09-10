<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;


class Motorbike extends Model
{

    /**
     * Main function for the second part of the question.
     * Using a left join to pull results from the
     * motorbikes table and matching on motorbike_id
     * as the lookup key.
     *
     *
     * @return arr
     **/
    public function get_motorbikes_and_owners()
    {

        $output = DB::table('motorbikes')
                  ->leftJoin('owners', 'motorbikes.id', '=', 'owners.motorbike_id')
                  ->orderBy('owners.name', 'ASC')
                  ->get();

        return $output;
     }

}
