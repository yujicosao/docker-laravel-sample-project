<?php $__env->startSection('content'); ?>
                
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
                                    <li>ユニットテスト用フォーム</li>
                                </ul>
                                <h4>ユニットテスト用更新</h4>
                            </div>
                        </div><!-- media -->
                    </div><!-- pageheader -->
                    
                    <div class="contentpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-horizontal" method="POST" action="<?php echo e(route('admin-book.update',$book->id)); ?>">
                                    <?php echo e(csrf_field()); ?>

                                    <?php echo e(method_field('PUT')); ?>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="panel-btns">
                                                <a href="" class="panel-minimize tooltips" data-toggle="tooltip" title="Minimize Panel"><i class="fa fa-minus"></i></a>
                                                <a href="" class="panel-close tooltips" data-toggle="tooltip" title="Close Panel"><i class="fa fa-times"></i></a>
                                            </div><!-- panel-btns -->
                                            <h4 class="panel-title">ユニットテスト用フォーム</h4>
                                            <p>全ての項目の入力が必須です</p>
                                            <?php if($errors->any()): ?>
                                            <div class="alert alert-danger">
                                                <ul>
                                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li><?php echo e($error); ?></li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            </div>
                                        <?php endif; ?>
                                        </div>
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label class="col-sm-1 control-label">タイトル:</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="title" value="<?php echo e($book->title); ?>" class="form-control" />
                                                </div>
                                            </div><!-- form-group -->
                                        
                                            <div class="form-group">
                                                <label class="col-sm-1 control-label">本文:</label>
                                                <div class="col-sm-8">
                                                    <textarea class="form-control" rows="5" name="body"><?php echo e($book->body); ?></textarea>
                                                </div>
                                            </div><!-- form-group -->
                                        </div><!-- panel-body -->
                                        <div class="panel-footer">
                                            <button tyle="submit" class="btn btn-primary mr5">登録</button>
                                            
                                        </div><!-- panel-footer -->
                                    </div><!-- panel-default -->
                                </form>
                            </div><!-- col-md-6 -->
                        </div><!-- row -->
                    </div><!-- contentpanel -->
                </div>
            </div><!-- mainwrapper -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /work/resources/views/admin/book-edit.blade.php ENDPATH**/ ?>