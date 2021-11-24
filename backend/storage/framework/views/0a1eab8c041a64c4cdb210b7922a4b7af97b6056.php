<?php $__env->startSection('title', 'Apart NEWS'); ?>

<?php $__env->startSection('content'); ?>
  <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('images/hero_bg_1.jpg');"
  data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">
        <h1 class="text-white">News &amp; Events</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      </div>
    </div>
  </div>
  </div>
  <div class="site-section">
  <div class="container">
    <div class="row">
      <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
          <a href="<?php echo e(route('news_detail', $notice->id)); ?>">
            <?php if($notice->file_name): ?>
              <img src="<?php echo e($notice->file_name); ?>" style="width:100%">
            <?php else: ?>
              <img src="https://placehold.jp/1900x1268.png?text=No Image" style="width:100%">
              
            <?php endif; ?>
          </a>
          <div class="p-4 bg-white">
            <span class="d-block text-secondary small text-uppercase"><?php echo e($notice->created_at); ?></span>
            <h2 class="h5 text-black mb-3"><a href="<?php echo e(route('news_detail', $notice->id)); ?>"><?php echo e($notice->title); ?></a></h2>
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

  </div>

  <div class="container mt-5" data-aos="fade-up">
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="site-block-27">
          <?php echo e($news->links()); ?>

        </div>
      </div>
    </div>
  </div>
  </div>

  </div>

  
<?php $__env->stopSection(); ?>
    








    
    
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /work/resources/views/news.blade.php ENDPATH**/ ?>