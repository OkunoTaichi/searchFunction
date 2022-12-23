@include('search_layouts.header')
  <body>
    <h2>編集</h2>
    <div id="app">
      <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        @include('search_layouts.nav')<!-- ログインナビゲーションを継承 -->
      </nav>

      <main class="py-4">

        <div class="change_nav">
          @include('search_layouts.change_nav')<!-- 検索バーを継承 -->
        </div>

        <div class="container">
          @include('search_layouts.searching_nav.search_nav')<!-- 検索バーを継承 -->

          @include('search_layouts.search_table')<!-- 一覧表示を継承 -->
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

