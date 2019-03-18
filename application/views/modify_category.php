<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php include('common/head.php');?>
<?php include('common/header.php');?>




<div class="site-main-container modify-category-page">
    <div class="container no-padding">
        <div class="row modify-category-form">

            <div class="col-lg-6 offset-lg-3">

                <?php echo form_open(isset($isCategoryAdd) && $isCategoryAdd == TRUE ? "/categories/add" : "/categories/edit/$category[id]"); ?>

                    <div class="col-lg-12"><h1 class="mb-30"><?php echo isset($isCategoryAdd) && $isCategoryAdd == TRUE ? 'Добавить новую категорию' : 'Изменить категорию'; ?></h1></div>

                    <div class="col-lg-12"><input type="text" class="form-control mb-15" placeholder="Название категории" name="name" value="<?=$category['name']?>"></div>
                    <div class="col-lg-12"><input type="file" class="form-control mb-15" name="img"></div>

                    <?php if(isset($isCategoryAdd) && $isCategoryAdd == TRUE) { ?>
                        <div class="col-lg-12"><button class="add-category-btn primary-btn primary">Добавить</button></div>
                    <?php } else { ?>
                        <div class="row text-center">
                            <div class="col-6"><a href="/categories/" class="primary-btn primary">Отмена</a></div>
                            <div class="col-6"><button class="primary-btn primary">Сохранить</button></div>
                        </div>
                    <?php } ?>
                <?php echo form_close(); ?>
            </div>
            
            <div class="col-lg-6 offset-lg-3 modify-category-error"><?php echo validation_errors(); ?></div>

        </div>
    </div>
</div>

<?php include 'common/footer.php'; ?>