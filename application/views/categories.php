<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php include('common/head.php');?>
<?php include('common/header.php');?>

<div class="site-main-container categories-list-page">
    <div class="container no-padding">
        <div class="load-more">
            <a href="/categories/add/" class="primary-btn">Добавить новую категорию</a>
        </div>
        <div class="row categories-list">
            <div class="col-lg-12">
                <h4 class="cat-title">Категории</h4>
            </div>
            <?php foreach($categories as $itm): ?>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 mt-20">
                    <div class="single-category">
                        <div class="feature-image-thumb relative">
                            <div class="overlay overlay-bg"></div>
                            <img class="img-fluid" src="/assets/img/top-post2.jpg" alt="">
                        </div>
                        <div class="category-details">
                            <ul class="tags">
                                <li><a href="/category/<?=$itm['id']?>?limit=1"><?=$itm['name']?></a></li>
                            </ul>
                        </div>
                        <div class="category-actions">
                            <a href="/categories/edit/<?=$itm['id']?>" class="lnr lnr-pencil icon"></a>
                            <a href="/categories/remove_confirm/<?=$itm['id']?>" class="lnr lnr-trash icon"></a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>

<?php include 'common/footer.php'; ?>