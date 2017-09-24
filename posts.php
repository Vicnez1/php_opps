<script type="text/javascript">
document.getElementById('showform').style.display = "block";
function updatePost(val) {
    
    
    alert(val.value);
    window.location.href='<?php $_SERVER['PHP_SELF']; ?>?uid='+val.value;

}
</script>
<?php
require 'classes/Database.php';
$database = new Database;

//print_r($rows);
$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
if (isset($_POST['submit'])) {
	$title = $post['title'];
	$body = $post['body'];
	$database->query('INSERT INTO posts (title, body) VALUES(:title, :body)');
	$database->bind(':title', $title);
	$database->bind(':body', $body);
	$database->execute();
	if ($database->lastInsertId( )) {
		echo '<span>Post Added...</span>';
	}
}

//$database->query('SELECT * FROM posts WHERE id = :id');
//$database->bind(':id', 1);
?>
<h1>ADD POSTS</h1>
<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
	<fieldset>
	<select name="id" onchange="updatePost(this)">
    <option value="">SELECT id for Update</option>
    <?php 
    $database->query('SELECT * FROM posts');
$rows = $database->resultset();
$rows = $database->resultset();
 foreach ($rows as $row) {?>
    <option value="<?php echo $row['id']; ?>"><?php echo $row['title']; ?></option>
	
<?php } ?>
</select><br/>
<?php if(isset($_GET['uid'])) {
       $id = $_GET['uid'];
       $database->query('SELECT * FROM posts WHERE id = :id');
       $database->bind(':id', $id);
       $rows = $database->resultset();
       foreach ($rows as $row) {
 ?>
 <div id="showform">
    <input type="text" name="title" value="<?php echo $row['title']; ?>" placeholder="Title" style="width:50%;"><br/>
    <textarea name="body" placeholder="Body" style="width:50%;"><?php echo $row['body']; ?></textarea><br/>
</div>
 <?php }
       }
       if (isset($_POST['update'])) {
	       $title = $post['title'];
	       $body = $post['body'];
	       $database->query('UPDATE posts SET title = :title, body = :body WHERE id = :id');
	       $database->bind(':title', $title);
	       $database->bind(':body', $body);
	       $database->bind(':id', $id);
	       $database->execute();
       }
       if (isset($_POST['delete'])) {
       	$del_id=$_POST['delete_id'];
       	$database->query('DELETE FROM posts WHERE id = :id');
       	$database->bind(':id', $del_id);
       	$database->execute();
       }
?>
    <div id="submit"><input type="submit" name="submit" value="submit" style="margin-left:250px;"></div>
    <div id="update"><input type="submit" name="update" value="update" style="margin-left:250px;"></div>
    </fieldset>
</form>
<h1>Posts</h1>
<div>
<?php
$database->query('SELECT * FROM posts');
$rows = $database->resultset();
 foreach ($rows as $row) : ?>
	<div>
        <h3><?php echo $row['title']; ?><form method="post" action="<?php $_SERVER['PHP_SELF']; ?>"> <input type="hidden" name="delete_id" value="<?php echo $row['id'];?>"><input type="submit" name="delete" value="Delete"></form></h3>
        <p><?php echo $row['body']; ?></p>
	</div>
<?php endforeach; ?>
</div>