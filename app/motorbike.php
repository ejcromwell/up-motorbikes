<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;


class Motorbike extends Model
{

    /**
     * Get all motorbikes and show if they have owners.
     *
     * @return arr
     **/
    public function get_motorbikes_and_owners()
    {

        $output = DB::table('motorbikes')
                  ->leftJoin('owners', 'motorbikes.id', '=', 'owners.motorbike_id')
                  ->get();

        return $output;
     }

}
