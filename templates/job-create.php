<?php //include header
include_once 'inc/header.php';
?>

<h2 class="page-header"> Create Job Listing</h2>
<form action="create.php" method="POST">
    <div class="form-group">
        <label for="company">Company</label>
        <input type="text" class="form-control" name="company">
    </div>

    <div class="form-group">
        <label for="company">Category</label>
        <select type="text" class="form-control" name="category">

            <option value="0">Choose Categories</option>
            <?php foreach ($categories as $category) : ?>
                <option value="<?php echo $category->id; ?> "><?php echo $category->name;  ?></option>
            <?php endforeach; ?>

        </select>
    </div>
    <div class="form-group">
        <label >Job title</label>
        <input type="text" class="form-control" name="job_title">
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea type="text" class="form-control" name="description"> </textarea>
    </div>
    <div class="form-group">
        <label>Location</label>
        <input type="text" class="form-control" name="location">
    </div>
    <div class="form-group">
        <label>Salary</label>
        <input type="text" class="form-control" name="salary">
    </div>
    <div class="form-group">
        <label>Contact User</label>
        <input type="text" class="form-control" name="contact_user">
    </div>
    <div class="form-group">
        <label>Contact Email</label>
        <input type="text" class="form-control" name="contact_email">
    </div>
    <input type="submit" value="Submit" name="submit" class="btn btn-primary " >

</form>
<?php //include header
include_once 'inc/footer.php';
?>