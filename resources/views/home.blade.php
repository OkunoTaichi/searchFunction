@include('search_layouts.header')
  <body>
   
    <div id="app">
      <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        @include('search_layouts.nav')<!-- ログインナビゲーションを継承 -->
      </nav>

      <main class="py-4">

        
        <div class="container">
          <div class="change_nav">
            @include('search_layouts.change_nav')<!-- 新規作成などのページ遷移ナビゲーションを継承 -->
          </div>
       
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

