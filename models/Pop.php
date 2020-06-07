<?php namespace Jc91715\Demo\Models;

use Model;

/**
 * Pop Model
 */
class Pop extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'jc91715_demo_pops';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
