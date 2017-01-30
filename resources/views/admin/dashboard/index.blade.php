@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('Escritorio') {!! $title !!} :: @parent @endsection

{{-- Content --}}
@section('main')
    <h3>
        Escritorio
    </h3>
    <div class="row">
        <div class="col-lg-3 col-md-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="glyphicon glyphicon-bullhorn fa-3x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{$newscategory}}</div>
                            <div>Categorias</div>
                        </div>
                    </div>
                </div>
                <a href="{{url('admin/articlecategory')}}">
                    <div class="panel-footer">
                        <span class="pull-left">{{ trans("admin/admin.view_detail") }}</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="glyphicon glyphicon-list fa-3x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{$news}}</div>
                            <div>Articulos</div>
                        </div>
                    </div>
                </div>
                <a href="{{url('admin/article')}}">
                    <div class="panel-footer">
                        <span class="pull-left">{{ trans("admin/admin.view_detail") }}</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <!--<div class="col-lg-3 col-md-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="glyphicon glyphicon-list fa-3x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{$photoalbum}}</div>
                            <div>{{ trans("admin/admin.photo_albums") }}!</div>
                        </div>
                    </div>
                </div>
                <a href="{{url('admin/photoalbum')}}">
                    <div class="panel-footer">
                        <span class="pull-left">{{ trans("admin/admin.view_detail") }}</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="glyphicon glyphicon-camera fa-3x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{$photo}}</div>
                            <div>{{ trans("admin/admin.photo_items") }}!</div>
                        </div>
                    </div>
                </div>
                <a href="{{url('admin/photo')}}">
                    <div class="panel-footer">
                        <span class="pull-left">{{ trans("admin/admin.view_detail") }}</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>-->
        <div class="col-lg-3 col-md-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="glyphicon glyphicon-user fa-3x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{$users}}</div>
                            <div>Usuarios</div>
                        </div>
                    </div>
                </div>
                <a href="{{url('admin/user')}}">
                    <div class="panel-footer">
                        <span class="pull-left">{{ trans("admin/admin.view_detail") }}</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection