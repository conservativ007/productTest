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

// задача 7
// В контроллере Product сделайте действие showProduct, маршрут к которому будет следующий: /product/:category_id/:product_id, где :category_id будет представлять собой номер категории в массиве $this->categories, а :product_id - номер продукта в подмассиве products соответствующей категории.

// Данное действие должно будет выводить запрошенный продукт с названием, ценой, наличием на складе, описанием продукта и названием категории этого продукта.

// Пусть наличие на складе выводится либо строкой 'есть в наличии', либо строкой 'нет в наличии'.
    public function showProduct($category_id, $product_id){
      return view('product.showProduct', [
        'product' =>
        $this->categories[$category_id]['products'][$product_id],
        'cat'     =>
        $this->categories[$category_id]['name'],
        'cat_id'  => $category_id,
      ]);
    }

// задача 8
// В контроллере Product сделайте действие showCategory, маршрут к которому будет следующий: /product/:category_id/, где :category_id будет представлять собой номер категории в массиве $this->categories.

// Данное действие должно будет выводить список продуктов данной категории. Пусть в списке будет название продукта и цена.

// Название продукта должно быть ссылкой на страницу одного продукта (то есть на действие showProduct).
    public function showCategory($category_id){
      return view('product.showCategory', [
        'catName'     => $this->categories[$category_id]['name'],
        'cat'         => $this->categories[$category_id]['products'],
        'category_id' => $category_id,
      ]);
    }

// В контроллере Product сделайте действие showCategoryList, маршрут к которому будет следующий: /categories/.

// Данное действие должно будет выводить список всех категорий. Пусть выводится название категории и количество продуктов в этой категории.

// Название категории должно быть ссылкой на список продуктов данной категории.
    public function showCategoryList(){
      return view('product.showCategoryList', [
        'cat'   => $this->categories,
      ]);
    }
  }
