@extends('searching.search_layouts.layout')
@section('searching.layout.title', '新規作成')

@section('searching.content')

<div class="container">
  <h2>新規作成</h2>
    <div class="change_nav">
        @include('searching.search_layouts.page_nav')<!-- 新規作成などのページ遷移ナビゲーションを継承 -->
    </div>

    @if (!empty($categories))
    <form method="POST" action="{{ route('store') }}" onSubmit="return checkSubmit()">
        @csrf

        <select class="form-select mb-4" aria-label="Default select example" name="category_id">
            <option selected>部門を選択してください</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
        @endforeach
        </select>
        
      
        <div class="mb-3 d-flex">
            <label for="SummarySectionName" class="form-label col-2">集計部門名称</label>
            <input type="text" class="form-control" id="SummarySectionName" name="SummarySectionName">
        </div>
        <div class="mb-3 d-flex">
            <label for="product_ab_name" class="form-label col-2">集計部門略称</label>
            <input type="text" class="form-control" id="product_ab_name" name="product_ab_name">
        </div>
        <div class="mb-3 d-flex">
            <label for="SummarySectionCode" class="form-label col-2">集計部門コード</label>
            <input type="text" class="form-control" id="SummarySectionCode" name="SummarySectionCode">
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

@endsection

