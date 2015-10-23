<?php

namespace App\Http\Controllers;

use App\Helpers\RImage;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Auth;
use DB;
class CategoryController extends Controller {


    function list_to_tree($list, $pk='id', $pid = 'pid', $child = '_child', $root = 0) {
        // 创建Tree
        $tree = array();
        if(is_array($list)) {
            // 创建基于主键的数组引用
            $refer = array();
            foreach ($list as $key => $data) {
                $refer[$data[$pk]] =&$list[$key];
            }
            foreach ($list as $key => $data) {
            // 判断是否存在parent
                $parentId = $data[$pid];
                if ($root == $parentId) {
                    $tree[] =&$list[$key];
                }else{
                    if (isset($refer[$parentId])) {
                        $parent =&$refer[$parentId];
                        $parent[$child][] =&$list[$key];
                    }
                }
            }
        }
        return $tree;
    }

	public function index() {
		$product = Product::findOrFail(1);
        $categories = DB::select('select id,category_id,name from categories where active=1');
       
              $list=array();
        foreach ($categories as $key => $data) {
               $list[$key]=(array)$data;
            }
             var_dump($list);
        $tree = $this->list_to_tree($list,'id','category_id','_child',NULL);
  
        print_r($tree);
exit();

		return view('product.view',
			[
				'product' => $product,
				'imagine' => new RImage()
			]
		);
	}
}
