@extends('news');
@section('content')
               <a style="float:left" class="btn btn-success" href="{{ URL::to('/create' ) }}">create</a>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Title</td>
            <td>Description</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
 @foreach($newsblog as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->title }}</td>
            <td>{{ $value->description }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>
            <a  class="btn btn-info" href="{{ URL::to('/' . $value->id . '/edit') }}">edit</a>
            <a  class="btn btn-warning" href="{{ URL::to('/' . $value->id)}}">delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection