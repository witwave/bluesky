<?php

namespace App\Http\Controllers;

use App\Helpers\RImage;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Auth;
use DB;

class ProductController extends Controller {


	public function index() {
		$products = Product::paginate(9);

		return view('product.category',
			[
				'products' => $products,
				'categories' =>$this->getCategories(1),
				'imagine' => new RImage()
			]
		);
	}

	public function view($id) {
		$product = Product::findOrFail(1);

		return view('product.view',
			[
				'product' => $product,
				'imagine' => new RImage(),
                'categories' =>$this->getCategories(1)
			]
		);
	}

    function getCategories($level=0){
        $categories = DB::select('select id,category_id,name from categories where active=1');

        $list=array();
        foreach ($categories as $key => $data) {
            $list[$key]=(array)$data;
        }
        $tree=$this->list_to_tree($list,'id','category_id','_child',NULL);
        if ($level==0){
            return $tree;
        }else if ($level==1){
            foreach($tree as $item){
                if ($item['category_id']==NULL){
                    return $item['_child'];
                }
            }
        }else{
            return $tree;
        }
    }

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
}
