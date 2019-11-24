# Package

from your project directy type git clone https://github.com/nidhin-n4n/Package.git packages

Then add these lines to composer.json file in root directroy 
"autoload": {
        "psr-4": {
            "MyVendor\\ProductList\\": "packages/MyVendor/ProductList/src",
            "App\\": "app/"
        },
        "classmap": [
            "database/seeds",
            "database/factories"
        ]
    },
    "autoload-dev": {
        "psr-4": {
            "MyVendor\\ProductList\\": "packages/MyVendor/ProductList/src",
            "Tests\\": "tests/"
        }
    },
    
    Then add this code to cofig/app.php file 
//  new package class
        MyVendor\ProductList\ProductListServiceProvider::class,
        
   After that type this in root folder $ composer dump-autoload
   
   Then type  $ php artisan migrate
   
   Then insert data to the table , you can use the seeder file inside the database/seeds folder 
   
   now you can test the package using the url root/product-list
   url            method
  product-list    GET
