<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/*  Columns:
 ***********************
id                  (increment)
name                (string, 255)
sku                 (string, 255)
short_description   (string, 255)
long_description    (text, nullable)
price               (float, 0)
featured            (boolean, false)
active              (boolean, true)
options             (text, nullable)
category_id         (unsigned, nullable)
created_at  (dateTime)
updated_at  (dateTime)
 ***********************/
class Product extends Model {
	protected $table = 'products';

	public function category() {
		return $this->belongsTo('App\Models\Category');
	}

	public function images() {
		return $this->morphMany('App\Models\Image', 'imageable');
	}

	public function tags() {
		return $this->morphToMany('App\Models\Tag', 'taggable');
	}

	public function orders() {
		return $this->belongsToMany('App\Models\Order', 'order_product');
	}

}
