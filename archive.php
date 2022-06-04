<?php include 'header.php'?>
<?php require_once 'request.php'?>
<?php require_once 'pagination.php'?>
<section class="text-center">
    <h2 class="capitalize text-4xl mt-24">git members list</h2>
    <div class="max-w-7xl mx-auto px-6 mt-24 flex justify-center gap-4">   
        <?php foreach ($users as $user) : ?>
           <div class="card italic">
                <a href="<?php echo $user['url']?>">
                    <img class="inline rounded-full w-20 h-20 border-solid border-2 border-indigo-500" src="<?php echo $user['image']?>" alt="user_avatar">
                    <p class="text-indigo-500 mt-2"><?php echo $user['title']?></p>
                </a>   
            </div>
       <?php endforeach; ?>  
    </div>
    <div class="pagination mt-12">
        <?php
            for ($i=1; $i <= $total_pages; $i++) { 
                printf("<a class='text-indigo-500 border-b-4 border-indigo-500 p-2 m-2' href='archive.php?page=%u'>%u</a>",$i,$i);
            }
        ?>
    </div>
</section>
<?php include 'footer.php'?>