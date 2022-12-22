@extends('layouts.app')

@section('content')

<main>
  <div class="container">
    <div class="mx-auto">
      <br>
      <h2 class="text-center">一覧、検索画面</h2>
      <br>
      <!--検索フォーム-->
      <div class="row">
        <div class="col-sm">
          <form method="GET" action="{{ route('searchproduct')}}">
            <div class="form-group row mb-4">
              <label class="col-sm-2 col-form-label">名称</label>
              <!--入力-->
              <div class="col-sm-5">
                <input type="text" class="form-control" name="searchWord" value="{{ $searchWord }}">
              </div>
            </div>     

            <!--プルダウンカテゴリ選択-->
            <div class="form-group row mb-5">
              <label class="col-sm-2">部門検索</label>
              <div class="col-sm-3">
                <select name="categoryId" class="form-control" value="{{ $categoryId }}">
                  <option value="">全て選択</option>

                  @foreach($categories as $id => $category_name)
                  <option value="{{ $id }}">
                    {{ $category_name }}
                  </option>  
                  @endforeach
                </select>
              </div>
              <div class="col-sm-auto">
                <button type="submit" class="btn btn-primary ">検索</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    
    <!--検索結果テーブル 検索された時のみ表示する-->
    @if (!empty($products))
    <div class="productTable">
      
      @if(!empty($products->count()))
      <p>検索結果 : 全 {{ $products->count() }} 件</p>
      <table class="table table-hover">
        <thead style="background-color: #ffd900">
          <tr>
            <!-- <th style="width:50%">商品名</th> -->
            <!-- <th>商品カテゴリ</th> -->
            <!-- <th>価格</th> -->
            <th>部門コード</th>
            <th>部門名称</th>
            <th>集計部門コード</th>
            <th>集計部門名称</th>
            <th>集計部門略称</th>
            <th>表示順</th>
            <th>非表示</th>
            <th></th>
          </tr>
        </thead>

        @else
        <p style="color:red;">検索結果がありません</p>
        @endif
   
        @foreach($products as $product)
        <tr>
          <!-- デパートメントテーブル -->
          <td>{{ $product->category->category_code }}</td>
          <td>{{ $product->category->category_name }}</td>
          
          <!-- サマリーテーブル -->
          <td>{{ $product->price }}</td>
          <td>{{ $product->product_name }}</td>
          <td>{{ $product->product_ab_name }}</td>
          
          <!-- <td><a href="#" class="btn btn-primary btn-sm">商品詳細</a></td> -->
        </tr>
        @endforeach   
      </table>
    </div>
    <!--テーブルここまで-->

    <!--ページネーション-->
    <div class="d-flex justify-content-center">
      {{-- appendsでカテゴリを選択したまま遷移 --}}
      {{ $products->appends(request()->input())->links() }}
    </div>
    <!--ページネーションここまで-->
    @endif









<!-- ここからーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->

    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h2>投稿</h2>
        <form method="POST" action="" onSubmit="return checkSubmit()">
            @csrf

            <!-- foreachで検索したデータを受け取る ＝＞ データがない場合も一覧検索のときに作った奴でエラーにならない-->
            @foreach($products as $product)
              <!-- $loop->first から breakで無理矢理１つのデータのみ取得-->
              @if ($loop->first)
                <div class="form-group">
                    <label for="title">部門CD</label>
                    <input id="title" name="room_id" class="form-control" value="{{ $product->category->category_code }}" type="text">
                </div>

                <div class="form-group">
                    <label for="title">集計部門CD</label>
                    <input id="title" name="title" class="form-control" value="{{ $product->category->category_name }}" type="text">
                    @if ($errors->has('room_id'))
                        <div class="text-danger">{{ $errors->first('room_id') }}</div>
                    @endif
                </div>
                @break
              @endif
            @endforeach  
        </form>
      </div>
    </div>

<!-- ここまでーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->
  </div>
</main>

<script>
    function checkSubmit(){
        if(window.confirm('送信してよろしいですか？')){
            return true;
        } else {
            return false;
        }
    }
</script>

@endsection