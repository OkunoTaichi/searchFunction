@extends('searching.search_layouts.layout')
@section('searching.layout.title', '変更・削除')

@section('searching.content') 

<div class="container form-wrap">

  <h2>更新画面</h2>
  <div class="change_nav">
      @include('searching.search_layouts.page_nav')<!-- 新規作成などのページ遷移ナビゲーションを継承 -->
  </div>

  <form method="POST" action="{{ route('update') }}" onSubmit="return checkSubmit()">
    @csrf
    <input type="hidden" name="id" value="{{ $input->id }}">
    <input type="hidden" name="category_id" value="{{ $input->category_id }}">
  
    <div class="mb-3 d-flex">
        <label for="SummarySectionName" class="form-label col-2">集計部門名称</label>
        <input type="text" class="form-control" id="SummarySectionName" name="SummarySectionName" value="{{ $input->SummarySectionName }}">
    </div>
    <div class="mb-3 d-flex">
        <label for="product_ab_name" class="form-label col-2">集計部門略称</label>
        <input type="text" class="form-control" id="product_ab_name" name="product_ab_name" value="{{ $input->product_ab_name }}">
    </div>
    <div class="mb-3 d-flex">
        <label for="SummarySectionCode" class="form-label col-2">集計部門コード</label>
        <input type="text" class="form-control" id="SummarySectionCode" name="SummarySectionCode" value="{{ $input->SummarySectionCode }}">
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
      <button type="submit" class="btn btn-danger">削除する</button>
  </form>
      
</div>

@endsection


