@extends('layouts.app')


<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <div class="room_list">

            <form  method="post" action="{{ route('room') }}">
                @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">部屋番号</label>
                <input type="text" class="form-control" id="room_id"  name="room_id">
               
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">部屋の名前</label>
                <input type="text" class="form-control" id="room_name" name="room_name">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">部屋のタイプ</label>
                <select class="form-select" aria-label="Default select example" name="room_type">
                    <!-- <option selected>部屋のタイプを選んでください</option> -->
                    <option value="松">One</option>
                    <option value="竹">Two</option>
                    <option value="梅">Three</option>
                </select>
            </div>

            <div class="mb-3">
                <select class="form-select" aria-label="Default select example" name="room_accommodated">
                    <!-- <option selected>宿泊人数を選んでください</option> -->
                    <option value="1">1名</option>
                    <option value="2">2名</option>
                    <option value="3">3名</option>
                </select>
            </div>
           
            <button type="submit" class="btn btn-primary">登録する</button>
            </form>
        </div>
        
    </body>
</html>
    
<style>
    .room_list{
        max-width: 1280px;
        margin: 0 auto;
    }

</style>

