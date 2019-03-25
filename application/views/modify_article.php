<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php include('common/head.php');?>
<?php include('common/header.php');?>




<div class="site-main-container modify-article-page">
    <div class="container no-padding">
        <div class="row modify-article-form">

            <div class="col-lg-12">

                <?php echo form_open($isArticleAdd ? 'articles/add?category_id='.$article['category_id'] : 'articles/edit/'.$article['id'].'?category_id='.$article['category_id']); ?>
                    <div class="col-lg-6 offset-lg-3"><h1 class="mb-30"><?php echo $isArticleAdd ? 'Добавить статью' : 'Редактировать статью';?></div>

                    <div class="col-lg-6 offset-lg-3"><input type="text" class="form-control mb-15" placeholder="Название статьи" name="title" value="<?=$article['title'];?>"></div>
                    <div class="col-lg-6 offset-lg-3"><input type="file" class="form-control mb-15" name="image"></div>

                    <div class="col-lg-12 mb-15"><textarea id="add-article-textarea" class="form-control" name="text" rows="5" cols="10"><?=$article['text'];?></textarea></div>

                    <?php if($isArticleAdd): ?>
                        <div class="col-lg-12"><button class="add-article-btn primary-btn primary">Добавить</button></div>
                    <?php else: ?>
                        <div class="row text-center">
                            <div class="col-6"><a href="/category/<?=$article['category_id'];?>?limit=5" class="primary-btn primary">Отмена</a></div>
                            <div class="col-6"><button class="primary-btn primary">Сохранить</button></div>
                        </div>
                    <?php endif ?>

                <?php echo form_close(); ?>
            </div>
            
            <div class="col-lg-6 offset-lg-3 modify-category-error"><?php echo validation_errors(); ?></div>

        </div>
    </div>
</div>

<?php include 'common/footer.php'; ?>