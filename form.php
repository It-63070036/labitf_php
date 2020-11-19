<!DOCTYPE html>
<html>
<head>
	<title>Comment Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body class="font-mail">
    <div class="container">
        <div class="row-md-5 row-sm-12">
            <div class="col">
                <div class="card md-3 col-sm-12">
                    <div class="card-header bg-primary text-white d-flex justify-content-between">
                        <h3>Add</h3>
                        <a href="index.php" class="btn btn-light">Back</a>
                    </div>
                    <div class="card-body">
                          <form action = "insert.php" method = "post" id="CommentForm" >
                                Name:<br>
                                <input type="text" name = "name" id="idName" class="form-control" placeholder="Enter Name"> <br>
                                Comment:<br>
                                <textarea rows="2" cols="20" name = "comment" id="idComment" class="form-control" placeholder="Enter Comment"></textarea><br>
				Link:<br>
				<input type="text" name = "link" id="idName" class="form-control" placeholder="Enter Link"> <br>
                                <input class="btn btn-success" type="submit" id="commentBtn">
                            </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
