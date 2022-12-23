<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
// 一覧表示ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー

    /*==================================
    検索フォームのみ表示(show)
    ==================================*/
    public function show(Request $request)
    {
        //フォームを機能させるために各情報を取得し、viewに返す

        // モデルでワードとIDでピックアップした項目を全て読み込む
        $category = new Category;
        $categories = $category->getLists();

        // カテゴリー名称で検索欄で検索をかけたときの処理
        $searchWord = $request->input('searchWord');
        
        // IDで検索欄で検索をかけたときの処理
        $categoryId = $request->input('categoryId');
       

        // View に渡す
        return view('search_product', [
            'categories' => $categories,
            'searchWord' => $searchWord,
            'categoryId' => $categoryId
        ]);
    }

    
    /*==================================
    検索メソッド(searchproduct)
    ==================================*/
    public function search(Request $request)
    {
        //入力される値nameの中身を定義する
        $searchWord = $request->input('searchWord'); //商品名の値
        $categoryId = $request->input('categoryId'); //カテゴリの値

        $query = Product::query();

      
        // 入力欄に商品名が入力された場合、productsテーブルから一致する商品を$queryに代入
        if (isset($searchWord)) {
            $query->where('product_name', 'like', '%' . self::escapeLike($searchWord) . '%');
        }
        // カテゴリが選択された場合、categoriesテーブルからcategory_idが一致する商品を$queryに代入
        if (isset($categoryId)) {
            $query->where('category_id', $categoryId);
        }

        // $queryをcategory_idの昇順に並び替えて$productsに代入
        $products = $query->orderBy('category_id', 'asc')->paginate(15);

        // categoriesテーブルからgetLists();関数でcategory_nameとidを取得する
        $category = new Category;
        $categories = $category->getLists();

        return view('search_product', [
            'products' => $products,
            'categories' => $categories,
            'searchWord' => $searchWord,
            'categoryId' => $categoryId,
        ]);
    }

    //「\\」「%」「_」などの記号を文字としてエスケープさせる
    public static function escapeLike($str)
    {
        return str_replace(['\\', '%', '_'], ['\\\\', '\%', '\_'], $str);
    }

// 一覧表示ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー



// 新規作成フォーム表示ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー

/*==================================
    検索フォームのみ表示(show)
    ==================================*/
    public function new_show(Request $request)
    {
        //フォームを機能させるために各情報を取得し、viewに返す

        // モデルでワードとIDでピックアップした項目を全て読み込む
        $category = new Category;
        $categories = $category->getLists();

        // カテゴリー名称で検索欄で検索をかけたときの処理
        $searchWord = $request->input('searchWord');
        
        // IDで検索欄で検索をかけたときの処理
        $categoryId = $request->input('categoryId');
       

        // View に渡す
        return view('new_product', [
            'categories' => $categories,
            'searchWord' => $searchWord,
            'categoryId' => $categoryId
        ]);
    }

    
    /*==================================
    検索メソッド(searchproduct)
    ==================================*/
    public function new(Request $request)
    {
        //入力される値nameの中身を定義する
        $searchWord = $request->input('searchWord'); //商品名の値
        $categoryId = $request->input('categoryId'); //カテゴリの値

        $query = Product::query();

      
        // 入力欄に商品名が入力された場合、productsテーブルから一致する商品を$queryに代入
        if (isset($searchWord)) {
            $query->where('product_name', 'like', '%' . self::escapeLike($searchWord) . '%');
        }
        // カテゴリが選択された場合、categoriesテーブルからcategory_idが一致する商品を$queryに代入
        if (isset($categoryId)) {
            $query->where('category_id', $categoryId);
        }

        // $queryをcategory_idの昇順に並び替えて$productsに代入
        $products = $query->orderBy('category_id', 'asc')->paginate(15);

        // categoriesテーブルからgetLists();関数でcategory_nameとidを取得する
        $category = new Category;
        $categories = $category->getLists();

        return view('new_product', [
            'products' => $products,
            'categories' => $categories,
            'searchWord' => $searchWord,
            'categoryId' => $categoryId,
        ]);
    }

    //「\\」「%」「_」などの記号を文字としてエスケープさせる
    public static function escapeLikeNew($str)
    {
        return str_replace(['\\', '%', '_'], ['\\\\', '\%', '\_'], $str);
    }

    /**
     * 登録する 
     * 
     * @return view
     */
    public function store(Request $request)
    {
        // データを受け取る
        $inputs = $request->all();
        \DB::beginTransaction();
        try{
            // データを登録
            Product::create($inputs);
            \DB::commit();
        }catch(\Throwable $e){
            \DB::rollback();
            abort(500);
        }
        \Session::flash('err_msg' , '登録しました。');
        return redirect( route('show') );
    }






// 新規作成フォーム表示ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー




















// 編集フォーム表示 不要の可能性ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー

/*==================================
    検索フォームのみ表示(show)
    ==================================*/
    public function edit_show(Request $request)
    {
        //フォームを機能させるために各情報を取得し、viewに返す

        // モデルでワードとIDでピックアップした項目を全て読み込む
        $category = new Category;
        $categories = $category->getLists();

        // カテゴリー名称で検索欄で検索をかけたときの処理
        $searchWord = $request->input('searchWord');
        
        // IDで検索欄で検索をかけたときの処理
        $categoryId = $request->input('categoryId');
       

        // View に渡す
        return view('edit_product', [
            'categories' => $categories,
            'searchWord' => $searchWord,
            'categoryId' => $categoryId
        ]);
    }

    
    /*==================================
    検索メソッド(searchproduct)
    ==================================*/
    public function edit(Request $request)
    {
        //入力される値nameの中身を定義する
        $searchWord = $request->input('searchWord'); //商品名の値
        $categoryId = $request->input('categoryId'); //カテゴリの値

        $query = Product::query();

      
        // 入力欄に商品名が入力された場合、productsテーブルから一致する商品を$queryに代入
        if (isset($searchWord)) {
            $query->where('product_name', 'like', '%' . self::escapeLike($searchWord) . '%');
        }
        // カテゴリが選択された場合、categoriesテーブルからcategory_idが一致する商品を$queryに代入
        if (isset($categoryId)) {
            $query->where('category_id', $categoryId);
        }

        // $queryをcategory_idの昇順に並び替えて$productsに代入
        $products = $query->orderBy('category_id', 'asc')->paginate(15);

        // categoriesテーブルからgetLists();関数でcategory_nameとidを取得する
        $category = new Category;
        $categories = $category->getLists();

        return view('edit_product', [
            'products' => $products,
            'categories' => $categories,
            'searchWord' => $searchWord,
            'categoryId' => $categoryId,
        ]);
    }

    //「\\」「%」「_」などの記号を文字としてエスケープさせる
    public static function escapeLikeEdit($str)
    {
        return str_replace(['\\', '%', '_'], ['\\\\', '\%', '\_'], $str);
    }
// 編集フォーム表示 不要の可能性ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー



}
