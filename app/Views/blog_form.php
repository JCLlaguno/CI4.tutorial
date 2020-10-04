<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Blog Form</title>
</head>
<body>
    <div class="container-fluid mt-4 col-md-6 offset-md-3">
        <div class="card">
        <div class="card-header">
            <h4 class="text-center">Blog Form</h4>
        </div>
        <div class="card-body">
            <form action="/admin/blog/new" method="post">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input class="form-control" type="text" name="title">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" name="content" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <input class="btn btn-primary btn-block" type="submit" value="Create">
                </div>
            </form>
        </div>
        </div>
    </div> 
</body>
</html>