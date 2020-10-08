@extends('layouts.main-layout')

@section ('content')
    
    <div class="card">
    <div class="card-header">
        <input id="best" type="checkbox" name='best'>
        <label for="best">BEST</label> <br>
        <a class="btn btn-secondary" href="{{ route('create')}}">CREATE</a>
    </div>
        <div class="card-body">
            <ul>
                 <li id="posts">
                     
                 </li>
            </ul>
        </div>
    </div>

@endsection