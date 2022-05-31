<?php require_once 'templates/top.php';
if (isset($_GET['url'])){
    $url = $_GET['url'];
}else{
    $url = 'index';
}

$query = "SELECT * FROM maintexts WHERE url='$url'";
$adr = mysqli_query($dbcon, $query);
if (!isset($adr)){
    exit('ADR is not exist');
}
$tbl_maintext = mysqli_fetch_assoc($adr);
?>
<h2>
    <?php echo $tbl_maintext['name']; ?>
</h2>
<div>
    <?php echo $tbl_maintext['body']; ?>
</div>

<!--Column-->
<?php require_once 'templates/bottom.php';?>

