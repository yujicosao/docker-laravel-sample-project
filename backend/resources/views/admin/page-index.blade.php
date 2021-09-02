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
                                    <li>固定ページ</li>
                                </ul>
                                <h4>固定ページ</h4>
                            </div>
                        </div><!-- media -->
                    </div><!-- pageheader -->
                    
                    <div class="contentpanel">
                            <p class="mb20">
                              <a href="{{ route('admin-page.create') }}" class="btn btn-primary">新規作成</a>
                            </p>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-primary mb30">
                                        <thead>
                                          <tr>
                                            <th style="width: 2%">#</th>
                                            <th style="width: 10%">タイトル</th>
                                            <th style="width: 10%">スラッグ</th>
                                            <th style="width: 30%">本文</th>
                                            <th style="width: 10%">作成日</th>
                                            <th style="width: 10%"></th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($pages as $page)
                                            <tr>
                                              <td><a href="{{ route('admin-page.show', $page->id) }}">{{ $page->id }}</a></td>
                                              <td>{{ $page->title }}</td>
                                              <td>{{ $page->slug }}</td>
                                              <td>{{ $page->body }}</td>
                                              <td>{{ $page->created_at }}</td>
                                              <td>
                                                <div class="btn-list" style="display:flex;justify-content: flex-end;">
                                                  <a href="{{ route('admin-page.edit', $page->id)}}" class="btn btn-primary">更新</a>
                                                  <form class="form-horizontal" method="POST" action="{{ route('admin-page.destroy', $page->id) }}">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <button class="btn btn-danger delete_btn" type="submit">削除</button>
                                                  </form>
                                              </div>
                                              </td>
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
