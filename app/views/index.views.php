<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Books Page</title>
</head>
<body>
    
    
    <form action="books" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <legend>Books Form</legend>
            </div>
            
            
            <div class="form-group">
                <label for="inputtitle" class="col-sm-2 control-label">Book title:</label>
                <div class="col-sm-10">
                    <input type="text" name="title" id="inputtitle" class="form-control" value="" required="required" title="">
                </div>
            </div>

            <div class="form-group">
                <label for="inputauthor" class="col-sm-2 control-label">Book author:</label>
                <div class="col-sm-10">
                    <input type="text" name="author" id="inputtitle" class="form-control" value="" required="required" title="">
                </div>
            </div>
            
            
            <div class="form-group">
                <label for="textareaShortDescription" class="col-sm-2 control-label">Book Short Description:</label>
                <div class="col-sm-10">
                    <textarea name="shortDescription" id="textareaShortDescription" class="form-control" rows="3" required="required"></textarea>
                </div>
            </div>

            <div class="form-group">
                <label for="textareaLongDescription" class="col-sm-2 control-label">Book Long Description:</label>
                <div class="col-sm-10">
                    <textarea name="longDescription" id="textareaLongDescription" class="form-control" rows="3" required="required"></textarea>
                </div>
            </div>
            
            <div class="form-group">
                <label for="inputISBN" class="col-sm-2 control-label">Book ISBN:</label>
                <div class="col-sm-10">
                    <input type="text" name="isbn" id="inputISBN" class="form-control" value="" required="required" title="">
                </div>
            </div>

            
            <div class="form-group">
                <label for="inputCoverPage" class="col-sm-2 control-label">CoverPage:</label>
                <div class="col-sm-10">
                    <input type="file" name="coverpage" id="inputCoverPage"value="" accept=".jpg,.png,.jpeg">
                </div>
            </div>
            

            <div class="form-group">
                <label for="inputPub" class="col-sm-2 control-label">Pub:</label>
                <div class="col-sm-10">
                    <input type="file" name="pub" id="inputPub"  value="" accept=".pub">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
    </form>
    

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>BookName</th>
                <th>AuthorName</th>
                <th>ISBN</th>
                <th>PubName</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if(checkArrayIsset($books)){
                foreach ($books as $key => $book) {
                    ?>
                        <tr>
                            <td><?=$book->title?></td>   
                            <td><?=$book->author?></td>   
                            <td><?=$book->isbn?></td>   
                            <td><?=$book->pub?></td>   
                        </tr>
                    <?php
                }
            }else{
                ?>
                <tr>
                    <td colspan="100%"><strong>No Details Found</strong></td>   
                </tr>
                <?php
            }
            
            ?>
        </tbody>
    </table>
    
</body>
</html>