<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php include('common/head.php');?>
<?php include('common/header.php');?>




<div class="site-main-container modify-article-page">
    <div class="container no-padding">
        <div class="row modify-article-form">

            <div class="col-lg-12">

                <?php echo form_open(isset($isArticleAdd) && $isArticleAdd == TRUE ? 'articles/add?category_id='.$category_id : 'articles/edit?category_id='.$category_id); ?>
                    <div class="col-lg-6 offset-lg-3"><h1 class="mb-30"><?php echo isset($isArticleAdd) && $isArticleAdd == TRUE ? 'Добавить статью' : 'Редактировать статью';?></div>

                    <div class="col-lg-6 offset-lg-3"><input type="text" class="form-control mb-15" placeholder="Название статьи" name="title" value="<?=$title;?>"></div>
                    <div class="col-lg-6 offset-lg-3"><input type="file" class="form-control mb-15" name="image"></div>

                    <div class="col-lg-12 mb-15"><textarea id="add-article-textarea" class="form-control" name="text" rows="5" cols="10"><?=$text;?></textarea></div>

                    <div class="col-lg-12"><button class="add-article-btn primary-btn primary">Добавить</button></div>
                        <!-- <div class="row text-center">
                            <div class="col-6"><a href="/categories/" class="primary-btn primary">Отмена</a></div>
                            <div class="col-6"><button class="primary-btn primary">Сохранить</button></div>
                        </div> -->
                <?php echo form_close(); ?>
            </div>
            
            <div class="col-lg-6 offset-lg-3 modify-category-error"><?php echo validation_errors(); ?></div>

        </div>
    </div>
</div>

<?php include 'common/footer.php'; ?>