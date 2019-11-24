<?php

/*
 * Copyright 2019 Asus.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace MyVendor\ProductList\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use MyVendor\ProductList\Models\Product;
//use MyVendor\ProductList\ProductServiceInterface;
use MyVendor\ProductList\Interfaces\ProductColorInterface;
use MyVendor\ProductList\Interfaces\ProductSpeedInterface;
use MyVendor\ProductList\Interfaces\ProductPriceInterface;


class ProductListController extends Controller   {

    public function index(ProductSpeedInterface $product_service,ProductColorInterface $product_color,ProductPriceInterface $product_price) {
        $color_where = $product_color->getProductColor();
        $speed_where = $product_service->getProductSpeed();
        $price_where = $product_price->getProductPrice();
        
        $product = Product::where($speed_where)
                   ->where($color_where)
                   ->where($price_where)
                ->get();
        
        return view('ProductList::product',compact('product'));
    }
   
    

}
