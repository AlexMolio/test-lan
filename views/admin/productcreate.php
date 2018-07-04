<h4>Добавить товар</h4>

            <br/>

            <div class="col-lg-4">
                
                <?php if(!$result){?>
                
                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data">

                        <p>Название товара</p>
                        <input type="text" name="name" placeholder="" value="">

                    <?php for($i=1;$i<=30;$i++):?>

                        <p>Свойство <?php echo $i;?></p>
                        <input type="text" name="char<?php echo $i;?>" placeholder="" value="">
                        
                    <?php endfor;?>

                        <p>Статус</p>
                        <select name="status">
                            <option value="1">Отображается</option>
                            <option value="0">Скрыт</option>
                        </select>
                        
                        <br/><br/>
                        
                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">
                        
                        <br/><br/>
                        
                    </form>
                </div>
                <?php }else{ echo "Товар добавлен!";}?>
            </div>