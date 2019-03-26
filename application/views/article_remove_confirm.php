<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php include('common/head.php');?>
<?php include('common/header.php');?>

<div class="site-main-container remove-article-page">
    <div class="container no-padding">
        <div class="row remove-article-wrap">
            <div class="col-lg-8 offset-lg-2"><h4 class="mb-30 text-center">Вы действительно хотите удалить статью "<?=$article['title']?>" ?</h4></div>
            <div class="col-lg-6 offset-lg-3 row">
                <div class="col-6 text-center mb-10"><a href="/category/<?=$article['category_id']?>" class="primary-btn">Отменить</a></div>
                <div class="col-6 text-center"><a href="/articles/remove/<?=$article['id']?>?category_id=<?=$article['category_id']?>" class="primary-btn primary">Удалить</a></div>
            </div>
        </div>
    </div>
</div>

<?php include 'common/footer.php'; ?>