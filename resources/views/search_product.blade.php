@include('search_layouts.head')
  <body>
   
    <div id="app">
      <header class="">
        @include('search_layouts.header')<!-- ログインナビゲーションを継承 -->
      </header>

      <main class="py-4">  
        <div class="container">
          <h2>一覧表示</h2>
          <div class="change_nav">
            @include('search_layouts.page_nav')<!-- 新規作成などのページ遷移ナビゲーションを継承 -->
          </div>
          @include('search_layouts.searching_nav.search_nav')<!-- 検索バーを継承 -->

    
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

