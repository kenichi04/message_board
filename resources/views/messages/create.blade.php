@extends('layouts.app')

@section('content')

    <h1>メッセージ新規作成ページ</h1>
    
    <div class="row">
        <div class="col-6">
            {!! Form::model($message, ['route' => 'messages.store']) !!}
            
                <div class="form-group">
                    {{-- 第一引数：カラム、第二引数：ラベル名 --}}
                    {!! Form::label('content', 'メッセージ') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
            
            {!! Form::close() !!}
        </div>
    </div>
    
@endsection