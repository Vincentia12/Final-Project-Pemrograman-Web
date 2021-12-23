@extends('admin.master')

@push('link_summer')
<!-- Summernote -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@section('title')
Add Article
@endsection

@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif

<form action="/admin/list-article" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Writer Name</label>
        <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}"
            placeholder="Full Name /  Anonymous">
        @error('name')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="topic">Topic</label>
        <input type="text" class="form-control" name="topic" id="topic" value="{{ old('topic') }}"
            placeholder="Topic of article">
        @error('topic')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="article">Article</label>
        <textarea name="article" id="summernote" class="form-control" cols="30" rows="10"></textarea>
        @error('article')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="picture">Upload Picture</label><br>
        <input type="file" name="picture" id="picture">
        @error('picture')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div><br>
    <button type="submit" class="btn btn-primary">Add Article</button>
    <a href="/admin/list-article" class="btn btn-outline-primary">Back</a>
</form>
@endsection

@push('summernote')
<!-- Summernote -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
$('#summernote').summernote({
    placeholder: 'Article...',
    fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Merriweather', 'Montserrat',
        'Scheherazade', 'Helvetica', 'Impact', 'Tahoma', 'Times New Roman', 'Verdana'
    ],
    fontNamesIgnoreCheck: ['Merriweather', 'Montserrat', 'Scheherazade'],
    height: 400,
    popatmouse: true
});
</script>
@endpush