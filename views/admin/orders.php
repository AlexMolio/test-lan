<table>
  		<tr>
    		<th>Имя</th>
    		<th>Майл</th>
    		<th>Сообщение</th>
    		<th>время</th>
  		</tr>
  			<?php foreach($orderList as $orderItem){?>
  		<tr>
  			<td><?php echo $orderItem['buyer_name'];?></td><td><?php echo $orderItem['buyer_email'];?></td><td><?php echo $orderItem['comment'];?></td><td><?php echo $orderItem['date'];?></td>
  		</tr>

  			<?php }?>
	</table>