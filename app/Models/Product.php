<?php

namespace marketplace\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Cache;
use DB;

class Product extends Model
{
    use SluggableTrait;

    protected $guarded	= ['id'];
	
	protected $table = 'products';

	protected $fillable = ['user_id', 'nama', 'slug', 'kondisi', 'berat', 'stok', 'harga_satuan', 'deskripsi', 'label', 'tag', 'pengiriman', 'gratis_kirim', 'asuransi'];

	protected $keyType = 'uuid';

	protected $sluggable = [
        'build_from' => 'nama',
        'save_to'    => 'slug',
    ];

    public static function boot() {
        parent::boot();

        static::saved(function(){
            Cache::tags('product')->flush();
        });

        static::deleted(function(){
            Cache::tags('product')->flush();
        });
    }

    public function user()
    {
    	return $this->belongsTo('\marketplace\User', 'user_id', 'id');
    }
}
