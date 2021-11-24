<?php $__env->startSection('title', 'Apart NEWS'); ?>

<?php $__env->startSection('content'); ?>
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('<?php echo e($notice['file_name']); ?>');"
    data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">

          <h1 class="text-white"><?php echo e($notice['title']); ?></h1>
          <p><?php echo e($notice['created_at']); ?></p>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">

          <?php if($notice['file_name']): ?>
            <figure>
              <img src="<?php echo e($notice['file_name']); ?>" alt="Image" class="img-fluid">
            </figure>
          <?php endif; ?>

          <p><?php echo e($notice['messages']); ?></p>
        </div>


        <div class="col-md-3 ml-auto">
          
          <div id="app">
            <example-component tests="<?php echo e($notice['id']); ?>"></example-component>
          </div>
          <div class="mb-5">
            <h3 class="h5 mb-3">最新記事</h3>
            <ul class="list-unstyled">
              <?php $__currentLoopData = $latest_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="mb-2"><a href="<?php echo e(route('news_detail', $notice->id)); ?>"><?php echo e($notice->title); ?></a></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </div>


  <div class="bg-primary" data-aos="fade">
    <div class="container">
      <div class="row">
        <a href="#" class="col-2 text-center py-4 social-icon d-block"><span
            class="icon-facebook text-white"></span></a>
        <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-twitter text-white"></span></a>
        <a href="#" class="col-2 text-center py-4 social-icon d-block"><span
            class="icon-instagram text-white"></span></a>
        <a href="#" class="col-2 text-center py-4 social-icon d-block"><span
            class="icon-linkedin text-white"></span></a>
        <a href="#" class="col-2 text-center py-4 social-icon d-block"><span
            class="icon-pinterest text-white"></span></a>
        <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-youtube text-white"></span></a>
      </div>
    </div>
  </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /work/resources/views/news-show.blade.php ENDPATH**/ ?>