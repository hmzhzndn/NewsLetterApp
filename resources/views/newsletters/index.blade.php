@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Newsletters</h1>
    <a href="{{ route('newsletters.create') }}" class="btn btn-primary">Create Newsletter</a>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($newsletters as $newsletter)
                <tr>
                    <td>{{ $newsletter->title }}</td>
                    <td>{{ $newsletter->content }}</td>
                    <td>
                        <a href="{{ route('newsletters.edit', $newsletter->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('newsletters.destroy', $newsletter->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
