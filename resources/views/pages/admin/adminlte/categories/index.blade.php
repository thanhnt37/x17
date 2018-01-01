@extends('pages.admin.' . config('view.admin') . '.layout.application', ['menu' => 'categories'] )

@section('metadata')
@stop

@section('styles')
    <style>
        .categories-index tr td:nth-child(2) {
            text-align: center;
        }
        .category-wildcard {
            width: 50px;
            height: 50px;
            border: 1px solid;
            display: inline-block;
            border-radius: 50px;
            text-align: center;
            line-height: 48px;
            background: aquamarine;
            font-size: 20px;
            font-weight: bolder;
        }
        .category-wildcard  a {
            color: inherit;
            text-decoration: none;
        }
    </style>
@stop

@section('scripts')
<script src="{!! \URLHelper::asset('js/delete_item.js', 'admin/adminlte') !!}"></script>
@stop

@section('title')
@stop

@section('header')
Categories
@stop

@section('breadcrumb')
<li class="active">Categories</li>
@stop

@section('content')
<div class="box box-primary">
    <div class="box-header with-border">

        <div class="row">
            <div class="col-sm-6">
                <h3 class="box-title">
                    <p class="text-right">
                        <a href="{!! action('Admin\CategoryController@create') !!}" class="btn btn-block btn-primary btn-sm" style="width: 125px;">@lang('admin.pages.common.buttons.create')</a>
                    </p>
                </h3>
                <br>
                <p style="display: inline-block;">@lang('admin.pages.common.label.search_results', ['count' => $count])</p>
            </div>
            <div class="col-sm-6 wrap-top-pagination">
                <div class="heading-page-pagination">
                    {!! \PaginationHelper::render($paginate['order'], $paginate['direction'], $paginate['offset'], $paginate['limit'], $count, $paginate['baseUrl'], [], $count, 'shared.topPagination') !!}
                </div>
            </div>
        </div>
    </div>
    <div class="box-body" style=" overflow-x: scroll; ">
        <table class="table table-bordered categories-index">
            <tr>
                <th style="width: 10px">{!! \PaginationHelper::sort('id', 'ID') !!}</th>
                <th>{!! \PaginationHelper::sort('wildcard', trans('admin.pages.categories.columns.wildcard')) !!}</th>
                <th>{!! \PaginationHelper::sort('name', trans('admin.pages.categories.columns.name')) !!}</th>
                <th>{!! \PaginationHelper::sort('slug', trans('admin.pages.categories.columns.slug')) !!}</th>
                <th>{!! \PaginationHelper::sort('slug', trans('admin.pages.categories.columns.parent_id')) !!}</th>

                <th style="width: 40px">@lang('admin.pages.common.label.actions')</th>
            </tr>
            @foreach( $categories as $category )
                <tr>
                    <td>{{ $category->id }}</td>

                    <td>
                        <span style="background: {{ $category->color }};" class="category-wildcard">
                            <a href="{!! action('Admin\CategoryController@show', $category->id) !!}">{{ $category->wildcard }}</a>
                        </span>
                    </td>

                    <td>
                        <a href="{!! action('Admin\CategoryController@show', $category->id) !!}">{{ $category->name }}</a>
                    </td>

                    <td>{{ $category->slug }}</td>

                    <td>
                        @if( $category->parent_id == 0 )
                            <code>Root</code>
                        @else
                            <a href="{!! action('Admin\CategoryController@show', $category->parent->id) !!}">{{ $category->parent->name }}</a>
                        @endif
                    </td>

                    <td>
                        <a href="{!! action('Admin\CategoryController@show', $category->id) !!}"
                           class="btn btn-block btn-primary btn-xs">@lang('admin.pages.common.buttons.edit')</a>
                        <a href="#" class="btn btn-block btn-danger btn-xs delete-button"
                           data-delete-url="{!! action('Admin\CategoryController@destroy', $category->id) !!}">@lang('admin.pages.common.buttons.delete')</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="box-footer">
        {!! \PaginationHelper::render($paginate['order'], $paginate['direction'], $paginate['offset'], $paginate['limit'], $count, $paginate['baseUrl'], []) !!}
    </div>
</div>
@stop