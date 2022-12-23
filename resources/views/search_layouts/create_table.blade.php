

  <!--検索結果テーブル 検索された時のみ表示する-->
  @if (!empty($products))
      <div class="row">
      @if(!empty($products->count()))
        <div class="col-md-8 col-md-offset-2">
          
          <form method="POST" action="{{ route('store') }}" onSubmit="return checkSubmit()">
              @csrf

              <!-- foreachで検索したデータを受け取る ＝＞ データがない場合も一覧検索のときに作った奴でエラーにならない-->
              @foreach($products as $product)
             
                <!-- $loop->first から breakで無理矢理１つのデータのみ取得-->
                @if ($loop->first)
                
                  <input id="category_id" name="category_id" class="form-control" value="{{ $product->category->id }}" type="hidden">

                  <div class="m-4 d-flex">
                      <p class="title" style="width:100px">部門コード</p>
                      <p class="title ms-4">{{ $product->category->category_code }}</p>
                      <p class="title ms-4">{{ $product->category->category_name }}</p>
                  </div>

                  <div class="form-group m-4 d-flex">
                      <label for="price" style="width:150px">集計部門コード</label>
                      <input id="price" name="price" class="form-control" value="" type="text">
                      @if ($errors->has('room_id'))
                          <div class="text-danger">{{ $errors->first('room_id') }}</div>
                      @endif
                  </div>

                  <div class="form-group m-4 d-flex">
                      <label for="product_name" style="width:150px">集計部門名称</label>
                      <input id="product_name" name="product_name" class="form-control" value="" type="text">
                      @if ($errors->has('room_id'))
                          <div class="text-danger">{{ $errors->first('room_id') }}</div>
                      @endif
                  </div>

                  <div class="form-group m-4 d-flex">
                      <label for="product_ab_name" style="width:150px">集計部門略称</label>
                      <input id="product_ab_name" name="product_ab_name" class="form-control" value="" type="text">
                      @if ($errors->has('room_id'))
                          <div class="text-danger">{{ $errors->first('room_id') }}</div>
                      @endif
                  </div>

                  @break
                @endif
                @endforeach  
                <div class="mt-5">
                  <a class="btn btn-secondary" href="{{ route('new_show') }}">
                      キャンセル
                  </a>
                  <button type="submit" class="btn btn-primary">
                      作成する
                  </button>
                </div>
          </form>
        </div>
        @else
        <p></p>
        @endif
      </div>
  @endif    

