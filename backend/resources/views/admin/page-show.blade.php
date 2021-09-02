@extends('admin/base')

@section('content')
                
                <div class="mainpanel">
                    <div class="pageheader">
                        <div class="media">
                            <div class="pageicon pull-left">
                                <i class="fa fa-th-list"></i>
                            </div>
                            <div class="media-body">
                                <ul class="breadcrumb">
                                    <li><a href=""><i class="glyphicon glyphicon-home"></i></a></li>
                                    <li><a href="">Tables</a></li>
                                    <li>お知らせ詳細</li>
                                </ul>
                                <h4>お知らせ詳細 「{{ $notice->title }}」 </h4>
                            </div>
                        </div><!-- media -->
                    </div><!-- pageheader -->
                    
                    <div class="contentpanel">
                          <h5 class="lg-title mb5">Colored Tables</h5>
                              <p class="mb20">An example of colored tables in the header</p>
                              
                            <div class="row">
                              <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-primary mb30">
                                        <thead>
                                          <tr>
                                            <th style="width: 2%">#</th>
                                            <th style="width: 10%">タイトル</th>
                                            <th style="width: 30%">本文</th>
                                            <th style="width: 10%">作成日</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                              <td>{{ $notice->id }}</td>
                                              <td>{{ $notice->title }}</td>
                                              <td>{{ $notice->messages }}</td>
                                              <td>{{ $notice->created_at }}</td>
                                            </tr>
                                            <tr>
                                        </tbody>
                                    </table>
                                </div><!-- table-responsive -->
                            </div>
                            <img src="{{ asset('storage/images/' . $notice->file_name) }}" style="max-width:90%;margin:0 auto; display:block;">
                          </div><!-- row -->
                    </div><!-- contentpanel -->
                </div><!-- mainpanel -->
            </div><!-- mainwrapper -->
        </section>
@stop
