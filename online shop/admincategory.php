<?php include('include/admin/header.php'); ?>
<?php
    
    if(isset($_POST['addcategory'])){
        $category = $_POST['category']; 
        $jim->addcategory($category);
    }
   
?>
<section>
		<div class="container">
			<div class="row">
                <?php include('include/admin/sidebar.php'); ?>
                <div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Category</h2>                      
                        <form method="POST" action="admincategory.php">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">Category Name:</div>
                                    <input name="category" class="form-control" type="text" placeholder="...">
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn" name="addcategory">Submit</button>
                            </div>
                        </form>
                       <hr />
                        <table class="table table-bordered">
                            <thead class="bg-primary">
                                <th>Name</th>
                                <th colspan="2">Action</th>
                            </thead>
                            <tbody>
                            
                        <?php $category = $jim->getcategory();?>
                        <?php while($row = mysql_fetch_array($category)):?>
                            <tr>
                                <td><?php echo $row['title'];?></td>    
                                <td><a href="editcategory.php?p=edit&&id=<?php echo $row['id']; ?>"><i class="fa fa-edit fa-lg text-success"></i><small>Edit</small></a></td>    
                                <td><a href="admincategory.php?p=delete&&table=category&&id=<?php echo $row['id']; ?>" class="confirm"><i class="fa fa-times-circle fa-lg text-danger"></i> <small>Remove</small></a></td>    
                            </tr>
                        <?php endwhile; ?>
                            </tbody>
                        </table>

              </section>



<?php include('include/admin/footer.php'); ?>