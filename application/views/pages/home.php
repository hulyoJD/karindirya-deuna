<h1><?= $title;?></h1>
<ul>
    <?php foreach($blogs as $row){?>
    <li><?= $row['title'];?></li>
    <?php } ?>
</ul>
