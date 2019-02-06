<?php namespace Inhuaschool\Galerry\Models;

use Model;

/**
 * Model
 */
class Galerry extends Model
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
    public $table = 'inhuaschool_galerry_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachMany = [
        'gambar' => 'System\Models\File'
    ];
}
