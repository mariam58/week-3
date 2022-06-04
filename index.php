<?php include 'header.php'?>
<?php require_once 'request.php'?>
<section>
    <div class="max-w-7xl mx-auto px-6 text-center mt-36">
        <h1 class="text-5xl capitalize">add your github profile</h1>
        <form action="" method="post" class="mt-8">
            <input class="placeholder:italic w-96 border rounded-md py-2 pl-9 pr-3 shadow-md focus:outline-none focus:border-sky-500 focus:ring-1" type="text" name="user_name" placeholder="search your github profile from here" required value="<?php echo $name?>"><br>
            <p class="text-red-400 mt-6"><?php  echo !empty($errors) ? $errors[0] : null ?></p><br>
            <div class="card italic" <?php echo !empty($errors) ? 'style="display:block"' : 'style="display:none"'?>>
                <a href="<?php $users[0]['url']?>">
                    <img class="inline rounded-full w-20 h-20 border-solid border-2 border-indigo-500" src="<?php echo $users[0]['image']?>" alt="user_avatar">
                    <p class="text-indigo-500 mt-2"><?php echo $users[0]['title']?></p>
                </a>   
            </div>
            <input class="bg-indigo-500 hover:bg-indigo-600 px-4 py-2 rounded-md mt-3 text-white" type="submit" value="Submit" name="submit">
        </form>
    </div>
</section>
<?php include 'footer.php'?>