@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('Contenido') {!! trans("admin/article.article") !!} :: @parent @endsection

{{-- Content --}}
@section('main')
    <div class="page-header">
        <h3>
            Contenido
            <div class="pull-right">
                <div class="pull-right">
                    <a href="{!! url('admin/article/create') !!}"
                       class="btn btn-sm  btn-primary iframe"><span
                                class="glyphicon glyphicon-plus-sign"></span> Nuevo</a>
                </div>
            </div>
        </h3>
    </div>

    <table id="table" class="table table-striped table-hover">
        <thead>
        <tr>
            <th>Titulo</th>
            <th>{{ trans("admin/article.category") }}</th>
            <th>{{ trans("admin/admin.language") }}</th>
            <th>{{ trans("admin/admin.created_at") }}</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody></tbody>
    </table>
@endsection

{{-- Scripts --}}
@section('scripts')
@endsection
