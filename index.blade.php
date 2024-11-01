@extends('layout')
@section('content')
<div>
<a href="{{ route('Files.create') }}" type="button" class="btn btn-primary">Add Pages</a>
</div>
<div id="table">
            
            <div class="table-responsive">>
                    <table class="table">
                        <thead> 
                           
                            <th scope="col">Title</th>
                            <th scope="col">slug</th>
                            <th scope="col">action</th>
                        </thead>
                        <tbody>
                            @foreach($Files as $file)
                            <tr>
                               
                                <a href="{{ route('Files.edit', $file->id) }}" type="button" class="btn btn-primary">Edit</a>
                                <form action="{{route('Files.destroy', $file->id)}}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE') <!-- Use DELETE method for deleting -->
                                <button type="submit" class="btn btn-sm delete delete-btn btn btn-danger">Delete</button>
                            </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
@endsection