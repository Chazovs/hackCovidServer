<?php

namespace App\Repositories;

use App\Models\RegKey;
use App\Repositories\BaseRepository;

/**
 * Class RegKeyRepository
 * @package App\Repositories
 * @version May 22, 2020, 8:52 pm UTC
*/

class RegKeyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'key'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return RegKey::class;
    }
}
