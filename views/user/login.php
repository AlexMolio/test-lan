<?php if(is_array($errors)):?>
    <ul>
        <?php foreach ($errors as $error):?>
            <li> - <?php echo $error;?>
        <?php endforeach;?>
    <?php endif;?>

Введите данные администратора</br>
<form method="post" action="#">
    <input type="text" name="login" placeholder="Login" />
    <input type="password" name="password" placeholder="Password" />
    <input type="submit" name="submit" value="Submit" />
</form>