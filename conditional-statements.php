<?php 


$products = [
	['name' => 'Smartphone',  'price' => 500],
	['name' => 'PC',  'price' => 1000],
    ['name' => 'Headphones',  'price' => 1500],
    ['name' => 'Mouse',  'price' => 300],
    ['name' => 'Keyboard',  'price' => 400],

];

 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title> Conditional Statements</title>
 </head>
 <body>
     <div>
     	<ul>
     	<?php foreach ($products as $product) {	?>

     		<?php if ($product['price']>800) {?>

     	   <li><?php echo $product['name']; ?></li>





        <?php } ?>
     		
     	<?php } ?>



     	</ul>
     </div>
 </body>
 </html>