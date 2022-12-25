
@if(session('err_msg'))
    <p class="text-danger">{{ session('err_msg') }}</p>
@endif
<!--検索結果テーブル 検索された時のみ表示する-->
@if (!empty($products))
    <div class="productTable" id="detail">

        @if(!empty($products->count()))
        <p>検索結果 : 全 {{ $products->count() }} 件</p>
        <table class="table table-hover">
            <thead style="background-color: #ffd900">
            <tr>
                <th>部門コード2</th>
                <th>部門名称</th>
                <th>集計部門コード</th>
                <th>集計部門名称</th>
                <th>集計部門略称</th>
                <th>表示順</th>
                <th>非表示</th>
                <th></th>
            </tr>
            </thead>

            @foreach($products as $product)
                <tr>
                <!-- デパートメントテーブル -->
                <td>{{ $product->category->category_code }}</td>
                <td>{{ $product->category->category_name }}</td>
                
                <!-- サマリーテーブル -->
                <td>{{ $product->price }}</td>
                <td>{{ $product->product_name }}</td>
                <td>{{ $product->product_ab_name }}</td>
                
                <!-- 編集・削除 -->
                <td><a href="/edit/{{ $product->id }}" class="btn btn-primary btn-sm">編集・削除</a></td>
                </tr>
            @endforeach   
        </table>
        
        @else
            <p style="color:red;">検索結果がありません</p>
        @endif
    </div>
    <!--テーブルここまで-->

    <!--ページネーション-->
    <div class="d-flex justify-content-center">
        {{-- appendsでカテゴリを選択したまま遷移 --}}
        {{ $products->appends(request()->input())->links() }}
    </div>
    <!--ページネーションここまで-->
@endif

