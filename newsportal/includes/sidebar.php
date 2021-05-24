<div class="col-md-4">

<!-- Search Widget -->


<!-- Categories Widget -->
<div class="card my-4">
  <h5 class="card-header" style="background-color: black;color: white;">Categories</h5>
  <div class="card-body" style="background-color: yellow;">
    <div class="row">
      <div class="col-lg-6">
        <ul class="list-unstyled mb-0">
<?php $query=mysqli_query($con,"select id,CategoryName from tblcategory");
while($row=mysqli_fetch_array($query))
{
?>

          <li>
            <a style="color: black;" href="category.php?catid=<?php echo htmlentities($row['id'])?>"><?php echo htmlentities($row['CategoryName']);?></a>
          </li>
<?php } ?>
        </ul>
      </div>

    </div>
  </div>
</div>

<!-- Side Widget -->
<div class="card my-4">
  <h5 class="card-header" style="background-color: black;color: white;">Recent News</h5>
  <div class="card-body" style="background-color: blue;color: white;">
            <ul class="mb-0">
<?php
$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId limit 8");
while ($row=mysqli_fetch_array($query)) {

?>

<li>
            <a style="color: white;" href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>"><?php echo htmlentities($row['posttitle']);?></a>
          </li>
  <?php } ?>
</ul>
  </div>
</div>

</div>