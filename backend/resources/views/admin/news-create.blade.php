@extends('admin/base')

@section('content')
                
                <div class="mainpanel">
                    <div class="pageheader">
                        <div class="media">
                            <div class="pageicon pull-left">
                                <i class="fa fa-pencil"></i>
                            </div>
                            <div class="media-body">
                                <ul class="breadcrumb">
                                    <li><a href=""><i class="glyphicon glyphicon-home"></i></a></li>
                                    <li><a href="">Forms</a></li>
                                    <li>お知らせフォーム</li>
                                </ul>
                                <h4>新規お知らせ作成</h4>
                            </div>
                        </div><!-- media -->
                    </div><!-- pageheader -->
                    
                    <div class="contentpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-horizontal" method="POST" action="{{ route('admin-news.store') }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="panel-btns">
                                                <a href="" class="panel-minimize tooltips" data-toggle="tooltip" title="Minimize Panel"><i class="fa fa-minus"></i></a>
                                                <a href="" class="panel-close tooltips" data-toggle="tooltip" title="Close Panel"><i class="fa fa-times"></i></a>
                                            </div><!-- panel-btns -->
                                            <h4 class="panel-title">お知らせフォーム</h4>
                                            <p>全ての項目の入力が必須です</p>
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label class="col-sm-1 control-label">タイトル:</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="title" class="form-control" />
                                                </div>
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label class="col-sm-1 control-label">アイキャッチ画像:</label>
                                                <div class="col-sm-8">
                                                    <input type="file" name="img" accept=".png,.jpg,.jpeg,image/png,image/jpg" class="form-control" />
                                                </div>
                                            </div><!-- form-group -->      
                                            <div class="form-group">
                                                <label class="col-sm-1 control-label">本文:</label>
                                                <div class="col-sm-8">
                                                    <textarea class="form-control" rows="5" name="messages"></textarea>
                                                </div>
                                            </div><!-- form-group -->
                                        </div><!-- panel-body -->
                                        <div class="panel-footer">
                                            <button tyle="submit" class="btn btn-primary mr5">登録</button>
                                            {{-- <button type="reset" class="btn btn-default">Reset</button> --}}
                                        </div><!-- panel-footer -->
                                    </div><!-- panel-default -->
                                </form>
                            </div><!-- col-md-6 -->
                        </div><!-- row -->
                    </div><!-- contentpanel -->
                </div>
            </div><!-- mainwrapper -->
        </section>
@stop
