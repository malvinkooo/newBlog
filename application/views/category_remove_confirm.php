<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php include('common/head.php');?>
<?php include('common/header.php');?>

<div class="site-main-container remove-category-page">
    <div class="container no-padding">
        <div class="row remove-category-wrap">
            <div class="col-lg-8 offset-lg-2"><h4 class="mb-30 text-center">Вы действительно хотите удалять категорию "<?=$category['name']?>" ?</h4></div>
            <div class="col-lg-6 offset-lg-3 row">
                <div class="col-6 text-center mb-10"><a href="/categories" class="primary-btn">Отменить</a></div>
                <div class="col-6 text-center"><a href="/categories/remove/<?=$category['id']?>" class="primary-btn primary">Удалить</a></div>
            </div>
        </div>
    </div>
</div>

<?php include 'common/footer.php'; ?>