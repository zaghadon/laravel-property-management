<?php

namespace App\Repositories\Admin;

use App\Models\Location;
use InfyOm\Generator\Common\BaseRepository;

class LocationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Location::class;
    }
}
