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
                                    <li>お問い合わせ一覧</li>
                                </ul>
                                <h4>お問い合わせ一覧</h4>
                            </div>
                        </div><!-- media -->
                    </div><!-- pageheader -->
                    
                    <div class="contentpanel">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-primary mb30">
                                        <thead>
                                          <tr>
                                            <th style="width: 10%">email</th>
                                            <th style="width: 10%">タイトル</th>
                                            <th style="width: 40%">本文</th>
                                            <th style="width: 10%">お問い合わせ日</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($contacts as $contact)
                                            <tr>
                                              <td>{{ $contact->email }}</td>
                                              <td>{{ $contact->title }}</td>
                                              <td>{{ $contact->body }}</td>
                                              <td>{{ $contact->created_at }}</td>
                                            </tr>
                                            <tr>
                                          @endforeach
                                        </tbody>
                                    </table>
                                </div><!-- table-responsive -->
                            </div>
                          </div><!-- row -->
                    </div><!-- contentpanel -->
                </div><!-- mainpanel -->
            </div><!-- mainwrapper -->
        </section>

@stop
