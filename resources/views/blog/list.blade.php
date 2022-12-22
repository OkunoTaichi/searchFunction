@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h3 class="title text-center mb-3">ユーザーID</h3>
            <!-- フォーイーチで繰返し -->
            <div class="">00007</div>
        </div>
        <div class="col">
            <h3 class="title text-center mb-3">氏名</h3>
            <!-- フォーイーチで繰返し -->
          
        </div>
        <div class="col">
            <h3 class="title text-center mb-3">顧客閲覧権限</h3>
            <!-- フォーイーチで繰返し -->
            <div class="d-flex justify-content-between">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        全て許可
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" checked>
                    <label class="form-check-label" for="exampleRadios2">
                        参照のみ許可
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" checked>
                    <label class="form-check-label" for="exampleRadios3">
                        閲覧不可
                    </label>
                </div>
               
            </div>
        </div>
    </div>
</div>
@endsection

