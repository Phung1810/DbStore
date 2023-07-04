<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;
use App\Models\ProductModel;
use App\Http\Controllers\OderController;
use App\Models\OrderModel;
use App\Http\Controllers\ArticleController;
use App\Models\ArticleModel;
use App\Http\Controllers\ProductUserController;
use App\Models\UserModel;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $product_count = ProductModel::all()->count();
        $order_count = OrderModel::all()->count();
        $article_count = ArticleModel::all()->count();
        $user_count = UserModel::all()->count();
        return view('backend.home',['product_count'=>$product_count, 'order_count'=>$order_count, 'article_count'=>$article_count, 'user_count'=>$user_count]) ;
    }
}
