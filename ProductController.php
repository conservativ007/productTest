<?php
  namespace App\Http\Controllers;
  use App\Http\Controllers\Controller;

  class ProductController extends Controller{
    private $categories;

    public function __construct(){
      $this->categories = [
		 1 => [
			'name' => 'Фрукты',
			'products' => [
				1 => [
					'name'    => 'Яблоки',
					'cost'    => '300',
					'inStock' => true,
					'desc'    => 'яблоки кыргызские сладкие'
				],
				2 => [
					'name'    => 'Груши',
					'cost'    => '400',
					'inStock' => true,
					'desc'    => 'груши наши (беларуские) такие себе...'
				],
				3 => [
					'name'    => 'Ананасы',
					'cost'    => '500',
					'inStock' => false,
					'desc'    => 'ананасы обалденные)'
				],
			],
		],
		2 => [
			'name' => 'Овощи',
			'products' => [
				1 => [
					'name'    => 'Картоха',
					'cost'    => '700',
					'inStock' => true,
					'desc'    => 'картоха беларуская'
				],
				2 => [
					'name'    => 'Маркоука',
					'cost'    => '800',
					'inStock' => false,
					'desc'    => 'маркоука вьетнамская (необыкновенная)'
				],
				3 => [
					'name'    => 'Редис',
					'cost'    => '900',
					'inStock' => false,
					'desc'    => 'редис обыкновенный'
				],
			],
		],
	];
    }

    public function showProduct($category_id, $product_id){
      return view('product.showProduct', [
        'product' =>
        $this->categories[$category_id]['products'][$product_id],
        'cat'     =>
        $this->categories[$category_id]['name'],
        'cat_id'  => $category_id,
      ]);
    }

    public function showCategory($category_id){
      return view('product.showCategory', [
        'catName'     => $this->categories[$category_id]['name'],
        'cat'         => $this->categories[$category_id]['products'],
        'category_id' => $category_id,
      ]);
    }

    public function showCategoryList(){
      return view('product.showCategoryList', [
        'cat' => $this->categories,
      ]);
    }
  }
