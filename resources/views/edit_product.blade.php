@include('search_layouts.header')
  <body>
    <h2>編集</h2>
    <div id="app">
      <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        @include('search_layouts.nav')<!-- ログインナビゲーションを継承 -->
      </nav>

      <main class="py-4">


        <div class="container">

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

