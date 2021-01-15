@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} の詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>タスク</th>
            <td>{{ $task->content }}</td>
        </tr>
        <tr>
            <th>作成日時</th>
            <td>{{ $task->created_at }}</td>
        </tr>
        <tr>
            <th>更新日時</th>
            <td>{{ $task->updated_at }}</td>
        </tr>
        
    </table>

    {{-- 編集ページへのリンク --}}
    {!! link_to_route('tasks.edit', 'タスクの編集', ['task' => $task->id], ['class' => 'btn btn-light']) !!}

@endsection