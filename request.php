<?php require_once 'connection_db.php'?>
<?php
$errors=[];
$responseCode=null;
$name='';
//send request
if(isset($_POST['submit']) && !$_POST['user_name']==''){
    $name=$_POST['user_name'];  
    //check the name in sql
    $checkin = $pdo->prepare('SELECT * FROM users WHERE login like :keyword');
    $checkin->bindValue(':keyword', "$name");
    $checkin->execute();
    $users = $checkin->fetchAll(PDO::FETCH_ASSOC);
    if(count($users)>0){
        $errors[]='such user already exist';
    }
    else{
        $url = "https://api.github.com/users/$name";
        $resource = curl_init($url);
        curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($resource, CURLOPT_USERAGENT, 'week-3');
        $result = curl_exec($resource);
        $data = json_decode($result, false);
        $responseCode = curl_getinfo($resource, CURLINFO_HTTP_CODE);
        curl_close($resource);

        if($responseCode==200){
            //get data from github api
            $title = $data->name;
            $avatar = $data->avatar_url;
            $git_url= $data->html_url;
            $login= $data->login;
            //insert data into sql
            $statement2 = $pdo->prepare("INSERT INTO users (title, image, url, login) VALUES(:title, :avatar, :git_url, :login)");
            $statement2->bindValue(':title', $title);
            $statement2->bindValue(':avatar', $avatar);
            $statement2->bindValue(':git_url', $git_url);
            $statement2->bindValue(':login', $login);
            $statement2->execute();
            header('Location: archive.php');
        }else{
            $errors[]='Username entered incorrectly. Try again.';
        } 
    }  
}
?>