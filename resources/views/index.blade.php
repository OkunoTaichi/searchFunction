@include('search_layouts.head')
  <body>
   
    <div id="app">
      <header class="">
        @include('search_layouts.header')<!-- ログインナビゲーションを継承 -->
      </header>

      <main class="py-4">

        
        <div class="container">
          <h2>新規作成</h2>
            <div class="change_nav">
                @include('search_layouts.page_nav')<!-- 新規作成などのページ遷移ナビゲーションを継承 -->
            </div>

            @if (!empty($categories))
            <form method="POST" action="{{ route('store') }}" onSubmit="return checkSubmit()">
                @csrf

                <select class="form-select" aria-label="Default select example" name="category_id">
                    <option selected>部門を選択してください</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                @endforeach
                </select>
                
              
                <div class="mb-3">
                    <label for="product_name" class="form-label">集計部門名称</label>
                    <input type="text" class="form-control" id="product_name" name="product_name">
                </div>
                <div class="mb-3">
                    <label for="product_ab_name" class="form-label">集計部門略称</label>
                    <input type="text" class="form-control" id="product_ab_name" name="product_ab_name">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">集計部門コード</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>
                <div class="mt-5">
                  <a class="btn btn-secondary" href="{{ route('index') }}">
                      キャンセル
                  </a>
                  <button type="submit" class="btn btn-primary">
                      作成する
                  </button>
                </div>

            </form>
            @endif
        </div>
      </main>
    </div>
  </body>
</html>


<script>
  function checkSubmit(){
      if(window.confirm('送信してよろしいですか？')){
          return true;
      } else {
          return false;
      }
  }

</script>

