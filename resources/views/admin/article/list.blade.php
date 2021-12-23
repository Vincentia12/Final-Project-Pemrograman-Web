@extends('admin.master')

@section('title')
    List Submission
@endsection

@section('content')
    @if(session('success')) 
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif

    <a href="/admin/add-article" class="btn btn-primary mb-3">Add New Article</a>
    <table class="table">
        <thead class="thead-light">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Writer Name</th>
            <th scope="col" width="250px">Topic</th>
            <th scope="col"width="300px">Article</th>
            <th scope="col"width="150px">Picture</th>
            <th scope="col">Date Created</th>
            <th scope="col" >Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($articles as $key=>$article)
                <tr>
                    <td>{{$key + 1}}</th>
                    <td>{{$article->name}}</td>
                    <td>{{$article->topic}}</td>
                    <td>{{Str::limit($article->article, 60)}}</td>
                    <td>{{$article->picture}}</td>
                    <td>{{$article->created_at}}</td>
                    <td>
                        <form action="/admin/article/{{$article->id}}" method="POST">
                            <a href="/admin/article/{{$article->id}}" class="btn btn-info">Edit</a>
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger my-1" onclick="return confirm('Are you sure?')" value="Delete">
                        </form>
                    </td>
                </tr>
            @empty
                <tr colspan="3">
                    <td class="text-center">No data</td>
                </tr>  
            @endforelse              
        </tbody>
    </table>
@endsection