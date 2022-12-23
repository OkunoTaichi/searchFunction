<div class="mx-auto" id="search">
  <br>
  <h2 class="text-center">一覧、検索画面</h2>
  <br>
  <!--検索フォーム-->
  <div class="row">
    <div class="col-sm">
      <form method="GET" action="{{ route('search_product')}}">
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