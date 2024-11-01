@extends('layout')
@section('content')
<div class="container-fluid pt-4 px-4">
                <div class="row">
                    <div class="col-12 mt-3">
                        <h4>Add Pages</h4>

                        <form method="POST" action="{{ route('Files.update', $Files->id)}}" class="row mb-4"  enctype="multipart/form-data"> 
                            @csrf
                            <div class="col-lg-2 col-md-2 col-12 mt-3">
                                <label for="name" class="form-label">Name*</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-12 mt-3">
                                <input type="text" id="name" name="name" value="{{$Files->name}}" class="form-control" placeholder="Enter Page Name" required>
                            </div>

                            <div class="col-lg-2 col-md-2 col-12 mt-3">
                                <label for="name" class="form-label">Slug*</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-12 mt-3">
                                <input type="text" id="slug" name="slug" value="{{$Files->slug}}" class="form-control" placeholder="Enter page slug" required>
                            </div>

                           
                            
                            <div class="text-end mt-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    @endsection