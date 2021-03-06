@extends('pages.admin.' . config('view.admin') . '.layout.application', ['menu' => 'series'] )

@section('metadata')
@stop

@section('styles')
@stop

@section('scripts')
<script src="{!! \URLHelper::asset('js/delete_item.js', 'admin/adminlte') !!}"></script>
@stop

@section('title')
@stop

@section('header')
Series
@stop

@section('breadcrumb')
<li class="active">Series</li>
@stop

@section('content')
<div class="box box-primary">
    <div class="box-header with-border">

        <div class="row">
            <div class="col-sm-6">
                <h3 class="box-title">
                    <p class="text-right">
                        <a href="{!! action('Admin\SeriesController@create') !!}" class="btn btn-block btn-primary btn-sm" style="width: 125px;">@lang('admin.pages.common.buttons.create')</a>
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
        <table class="table table-bordered">
            <tr>
                <th style="width: 10px">{!! \PaginationHelper::sort('id', 'ID') !!}</th>
                <th>{!! \PaginationHelper::sort('title', trans('admin.pages.series.columns.title')) !!}</th>
                <th>{!! \PaginationHelper::sort('title', trans('admin.pages.series.columns.category_id')) !!}</th>
                <th>{!! \PaginationHelper::sort('voted', trans('admin.pages.series.columns.voted')) !!}</th>
                <th>{!! \PaginationHelper::sort('read', trans('admin.pages.series.columns.read')) !!}</th>

                <th style="width: 40px">{!! \PaginationHelper::sort('is_enabled', trans('admin.pages.series.columns.is_publish')) !!}</th>
                <th style="width: 40px">@lang('admin.pages.common.label.actions')</th>
            </tr>
            @foreach( $seriess as $series )
                <tr>
                    <td>{{ $series->id }}</td>

                    <td>
                        <a href="{!! action('Admin\SeriesController@show', $series->id) !!}">{{ $series->title }}</a>
                    </td>

                    <td>
                        <a href="{!! action('Admin\CategoryController@show', $series->category->id) !!}">{{ $series->category->name }}</a>
                    </td>

                    <td>{{ $series->voted }}</td>

                    <td>{{ $series->read }}</td>

                    <td>
                        @if( $series->isPublished() )
                            <span class="badge bg-green">@lang('admin.pages.common.label.is_enabled_true')</span>
                        @else
                            <span class="badge bg-red">@lang('admin.pages.common.label.is_enabled_false')</span>
                        @endif
                    </td>

                    <td>
                        <a href="{!! action('Admin\SeriesController@show', $series->id) !!}"
                           class="btn btn-block btn-primary btn-xs">@lang('admin.pages.common.buttons.edit')</a>
                        <a href="#" class="btn btn-block btn-danger btn-xs delete-button"
                           data-delete-url="{!! action('Admin\SeriesController@destroy', $series->id) !!}">@lang('admin.pages.common.buttons.delete')</a>
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