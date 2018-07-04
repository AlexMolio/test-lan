<h4>Редактировать товар #<?php echo $id; ?></h4>

            <br/>

            <div class="col-lg-4">
                
                <?php if(!$result){?>
                
                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data">

                        <p>Название товара</p>
                        <input type="text" name="name" placeholder="" value="<?php echo $productItem[0]['name']; ?>">

                        
                        
                        <?php for($i=1;$i<=30;$i++):?>

                            <p>Свойство <?php echo $i;?></p>
                            <input type="text" name="<?php echo $i;?>" placeholder="" value="<?php echo $productItem[0]["char$i"]; ?>">
                            
                        <?php endfor;?>


                        <p>Статус</p>
                        <select name="status">
                            <option value="1" <?php if ($productItem[0]['status'] == 1) echo ' selected="selected"'; ?>>Отображается</option>
                            <option value="0" <?php if ($productItem[0]['status'] == 0) echo ' selected="selected"'; ?>>Скрыт</option>
                        </select>
                        
                        <br/><br/>
                        
                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">
                        
                        <br/><br/>
                        
                    </form>
                </div>
                
                <?php }else{ echo "Товар обнавлен!";}?>
            </div>