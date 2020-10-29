@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Contacts</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Job Title</td>
                  
                    <td colspan=2>Actions</td>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                <tr>
                    <td>{{$contact->id}}</td>
                    <td>{{$contact->name}} {{$contact->surname}}</td>
                    <td>{{$contact->price}}</td>
                    
                    <td>
                        <a href="{{ route('contacts.edit',$contact->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('contacts.destroy', $contact->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div>
        </div>
        @endsection