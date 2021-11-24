<?php $__env->startSection('content'); ?>
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
                                    <li>お知らせ</li>
                                </ul>
                                <h4>お知らせ</h4>
                            </div>
                        </div><!-- media -->
                    </div><!-- pageheader -->
                    
                    <div class="contentpanel">
                            <p class="mb20">
                              <a href="<?php echo e(route('admin-news.create')); ?>" class="btn btn-primary">新規作成</a>
                            </p>
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
                                            <th style="width: 10%"></th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                              <td><a href="<?php echo e(route('admin-news.show', $notice->id)); ?>"><?php echo e($notice->id); ?></a></td>
                                              <td><?php echo e($notice->title); ?></td>
                                              <td><?php echo e($notice->messages); ?></td>
                                              <td><?php echo e($notice->created_at); ?></td>
                                              <td>
                                                <div class="btn-list" style="display:flex;justify-content: flex-end;">
                                                  <a href="<?php echo e(route('admin-news.edit', $notice->id)); ?>" class="btn btn-primary">更新</a>
                                                  <form class="form-horizontal" method="POST" action="<?php echo e(route('admin-news.destroy', $notice->id)); ?>">
                                                    <?php echo e(csrf_field()); ?>

                                                    <?php echo e(method_field('DELETE')); ?>

                                                    <button class="btn btn-danger delete_btn" type="submit">削除</button>
                                                  </form>
                                              </div>
                                              </td>
                                            </tr>
                                            <tr>
                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div><!-- table-responsive -->
                            </div>
                          </div><!-- row -->
                    </div><!-- contentpanel -->
                </div><!-- mainpanel -->
            </div><!-- mainwrapper -->
        </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /work/resources/views/admin/news-index.blade.php ENDPATH**/ ?>