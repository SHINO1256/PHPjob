
@extends('layouts.layout')
@section('title', 'ホーム')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- <div class="col-md-8"> -->
            <!-- <div class="card"> -->
                    <!-- <div class="card-body"> -->
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!-- </div> -->
                    
                <div class="content2">
                    <form action="/newpostsend" method="post">
                    @csrf
                        <p>ホーム</p>
                        <hr size="3px" noshade>
                        
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                        <input placeholder="いまどうしてる？" type="text" name="body" class="tweet">
                        <br>
                        <input type="submit" class="submitbtn" value="つぶやく">
                    </form>
                </div>
                <br>
                <div class="content2">
                @foreach($datas as $data)
                    @foreach($users as $user)
                        @if($data->user_id==$user->id)
                    <div>
                        <div>{{$user->name}}<div>
                        <br>
                        <div>{{$data->body}}<div>
                        <div>{{$data->created_at}}<div>
                        @if(Auth::id()==$data->user_id)
                            <div class="text-right">
                                <a href=" {{ action( 'PostController@delete',['id' => $data ->id]) }}">削除</a>
                            </div>
                        @endif
                    </div>
                        @endif
                    @endforeach
                    <hr>  
                @endforeach
                </div>
            <!-- </div> -->
        <!-- </div> -->
    </div>
</div>
@endsection
