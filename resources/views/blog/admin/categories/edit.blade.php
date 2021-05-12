@extends('layouts.app')

@section('content')
    <form method="post" action="{{route('blog.admin.categories.update', $item->id)}}">
        <div class="container">
            <div class="row justify-content-center">
                @method('PATCH')
                @csrf
                <div class="col-md-8">
                    @include('blog.admin.categories.includes.item_edit_main_col')
                </div>
                <div class="col-md-4">
                    @include('blog.admin.categories.includes.item_edit_add_col')
                </div>
            </div>
        </div>
    </form>
@endsection

