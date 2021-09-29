@extends('layouts.admin')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <form action="{{route('admin.categories.store')}}" method="post">
                @csrf
                <input type="text" name="category">
                <button type="submit">Сохранить</button>
            </form>
        </div>
    </div>
@endsection
