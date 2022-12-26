@include('search_layouts.head')
  <body>
   
    <div id="app">
      <header class="">
        @include('search_layouts.header')<!-- ログインナビゲーションを継承 -->
      </header>

      <main class="py-4">

        
        <div class="container form-wrap">

          <h2>更新画面</h2>
          <div class="change_nav">
              @include('search_layouts.page_nav')<!-- 新規作成などのページ遷移ナビゲーションを継承 -->
          </div>

          

          <form method="POST" action="{{ route('update') }}" onSubmit="return checkSubmit()">
            @csrf
            <input type="hidden" name="id" value="{{ $input->id }}">
            <input type="hidden" name="category_id" value="{{ $input->category_id }}">
          
            <div class="mb-3">
                <label for="product_name" class="form-label">集計部門名称</label>
                <input type="text" class="form-control" id="product_name" name="product_name" value="{{ $input->product_name }}">
            </div>
            <div class="mb-3">
                <label for="product_ab_name" class="form-label">集計部門略称</label>
                <input type="text" class="form-control" id="product_ab_name" name="product_ab_name" value="{{ $input->product_ab_name }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">集計部門コード</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $input->price }}">
            </div>
            <div class="mt-5 d-inline-block">
              <a class="btn btn-secondary" href="{{ route('show') }}">
                  キャンセル
              </a>
              <button type="submit" class="btn btn-primary ms-4">
                  変更する
              </button>

            </div>
          </form>
          <form class="card-body delete" action="{{ route('destroy') }}" method="POST" onSubmit="return checkDestroy()">
              @csrf
              <input type="hidden" name="id" value="{{ $input->id }}">
              <button type="submit" class="btn btn-primary">削除する</button>
          </form>
              
            
        </div>
     
      </main>
    </div>
  </body>
</html>


<script>
  function checkSubmit(){
      if(window.confirm('変更してよろしいですか？')){
          return true;
      } else {
          return false;
      }
  }

  function checkDestroy(){
      if(window.confirm('削除してよろしいですか？')){
          return true;
      } else {
          return false;
      }
  }

</script>
