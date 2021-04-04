<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('backend.topic.edit');
//});

//------------------------------Frontend--------------------------------------
Route::group(['namespace' => 'Frontend'], function () {
   Route::get('/', 'HomeController@getHome');


   //detail product
    Route::get('product_detail/{id}', 'HomeController@getProduct');

    Route::get('cart', 'HomeController@getCart');

//    Route::get('checkout', 'CheckoutController@getCheckout');

    Route::get('single_blog', 'HomeController@getBlog');

    Route::get('wishlist', 'HomeController@getWishlist');

    Route::get('my_account', 'HomeController@getMyAccount');

    Route::get('shop', 'HomeController@getShop')->name('shop');
    Route::get('topic/{id}', 'ShopController@getProductWithTopic');
    Route::get('color/{id}', 'ShopController@getProductWithColor');

    //Cart
    Route::group(['prefix' => 'cart'], function () {
        Route::get('add/{id}', 'CartController@getAddCart');
        Route::get('show', 'CartController@getShowCart');
        Route::get('delete/{id}', 'CartController@getDeleteCart');
        Route::get('update', 'CartController@getUpdateCart')->name('update_cart');


        Route::get('ajax_add/{id}', 'CartController@addTocCartAjax');
//        Route::get('delete', 'CartController@getDeleteCartAjax');

    });

    //checkout
    Route::get('checkout', 'CheckoutController@getCheckout');
    Route::post('checkout', 'CheckoutController@postCheckout');
    Route::get('complete', 'CheckoutController@getComplete');

    //send contact
    Route::get('contact', 'SendContactController@getContact');
    Route::post('contact', 'SendContactController@postContact');
    Route::get('complete_contact', 'SendContactController@getCompleteContact');

    Route::get('about_us', 'HomeController@getAboutUs');


});



//------------------------------Backend---------------------------------------
Route::group(['namespace' => 'Backend'], function () {
    //login
    Route::group(['prefix' => 'login', 'middleware' => 'CheckLogedIn'], function () {
        Route::get('/', 'LoginController@getLogin');
        Route::post('/', 'LoginController@postLogin');
    });

    Route::group(['prefix' => 'admin', 'middleware' => 'CheckLogedOut'], function () {
        Route::get('home', 'HomeController@getHome');

        //topics
        Route::group(['prefix' => 'topic'], function () {
            Route::get('/', 'TopicController@getTopic');
            Route::post('/', 'TopicController@postAddTopic');

            //Route::get('/', 'TopicController@getSearchTopic')->name('admin.topic.search');

            Route::get('edit/{id}', 'TopicController@getEditTopic')->name('admin.topic.edit');
            Route::post('edit/{id}', 'TopicController@postEditTopic');

            Route::get('delete/{id}', 'TopicController@getDeleteTopic');
        });

        //colors
        Route::group(['prefix' => 'color'], function () {
            Route::get('/', 'ColorController@getColor');
            Route::post('/', 'ColorController@postAddColor');

            //Route::get('/', 'ProductColorController@getSearchTopic')->name('admin.topic.search');

            Route::get('edit/{id}', 'ColorController@getEditColor')->name('admin.color.edit');
            Route::post('edit/{id}', 'ColorController@postEditColor');

            Route::get('delete/{id}', 'ColorController@getDeleteColor');
        });

        //sizes
        Route::group(['prefix' => 'size'], function () {
            Route::get('/', 'SizeController@getSize');
            Route::post('/', 'SizeController@postAddSize');

            //Route::get('/', 'ProductSizeController@getSearchSize')->name('admin.size.search');

            Route::get('edit/{id}', 'SizeController@getEditSize')->name('admin.size.edit');
            Route::post('edit/{id}', 'SizeController@postEditSize');

            Route::get('delete/{id}', 'SizeController@getDeleteSize');
        });

        //product
        Route::group(['prefix' => 'product'], function () {
            Route::get('/', 'ProductController@getProduct');

            Route::get('add', 'ProductController@getAddProduct');
            Route::post('add', 'ProductController@postAddProduct');

            Route::get('edit/{id}', 'ProductController@getEditProduct');
            Route::post('edit/{id}', 'ProductController@postEditProduct');

            Route::get('delete/{id}', 'ProductController@getDeleteProduct');

            Route::get('/search', 'ProductController@search')->name('seach_product_backend');
        });

        //transaction
        Route::group(['prefix' => 'transaction'], function () {
            Route::get('/', 'TransactionController@getTransaction');
            Route::get('seach_transaction_by_date', 'TransactionController@searchByDatetime')->name('transaction.seach_transaction_by_date');

        });

        //category blog
        Route::group(['prefix' => 'blog_category'], function () {
            Route::get('/', 'BlogCategoryController@getBlogCategory');
            Route::post('/', 'BlogCategoryController@postAddBlogCategory');

            //Route::get('/', 'ProductSizeController@getSearchSize')->name('admin.size.search');

            Route::get('edit/{id}', 'BlogCategoryController@getEditBlogCategory')->name('admin.blog_category.edit');
            Route::post('edit/{id}', 'BlogCategoryController@postEditBlogCategory');

            Route::get('delete/{id}', 'BlogCategoryController@getDeleteBlogCategory');
        });

        //blog
        Route::group(['prefix' => 'blog'], function () {
            Route::get('/', 'BlogController@getBlog');
            Route::post('/', 'BlogController@postAdBlog');

            //Route::get('/', 'ProductSizeController@getSearchSize')->name('admin.size.search');

            Route::get('add', 'BlogController@getAddBlog');
            Route::post('add', 'BlogController@postAddBlog');

            Route::get('edit/{id}', 'BlogController@getEditBlog')->name('admin.blog.edit');
            Route::post('edit/{id}', 'BlogController@postEditBlog');

            Route::get('delete/{id}', 'BlogController@getDeleteBlog');
        });

    });

    //logout
    Route::get('logout', 'HomeController@getLogout');

    //register


     Route::group(['prefix' => 'register', 'middleware' => 'CheckLogedIn'], function () {
         Route::get('/', 'RegisterController@getRegister');
         Route::post('/', 'RegisterController@postRegister');
     });

});









//------------------------------Frontend--------------------------------------
