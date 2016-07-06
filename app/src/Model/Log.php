<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

final class Log extends Model {

    protected $table = 'logs';

    protected $fillable = [
        'action',
        'entity_id',
        'entity_type',
        'state',
        'created_by',
    ];

    public $timestamps = false;

    public static function getSchemaName()
    {
        return 'App\Schema\LogSchema';
    }

}