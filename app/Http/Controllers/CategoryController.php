<?php

namespace App\Http\Controllers;

use App\Helpers\RImage;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Auth;
use DB;
use Cart;
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

        $categories = DB::select('select id,category_id,name from categories where active=1');

        $list=array();
        foreach ($categories as $key => $data) {
               $list[$key]=(array)$data;
        }

        $products = Product::where('active', 1)
            ->orderBy('created_at', 'desc')
            ->take(8)
            ->get();

        $tree = $this->list_to_tree($list,'id','category_id','_child',NULL);

		return view('product.list',
			[
				'products' => $products,
                'category' =>$tree,
				'imagine' => new RImage(),
                'cart'=>Cart::content()

			]
		);
	}
}
