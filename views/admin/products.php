<table>
  		<tr>
    		<th>Название</th>
    		<th>ID</th>
    		<th>Сообщение</th>
    		<th>Статус</th>
    		<th>Редактировать</th>
    		<th>Удалить</th>
  		</tr>
  			<?php foreach($productList as $productItem){?>
  		<tr>
  			<td><?php echo $productItem['name'];?></td><td><?php echo $productItem['id'];?></td><td><?php echo $productItem['char1'];?></td><td><?php echo $productItem['status'];?></td><th><a href="/admin/product/<?php echo $productItem['id'];?>">#</a></th><th><a href="/admin/productdelete/<?php echo $productItem['id'];?>">X</a></th>
  		</tr>

  			<?php }?>
  			
  		<a href="/admin/productcreate">Добавить новый продукт</a>
	</table>