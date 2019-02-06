<?php namespace Inhuaschool\Visi\Models;

use Model;

/**
 * Model
 */
class Visi extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'inhuaschool_visi_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
