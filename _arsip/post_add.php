<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Add Post</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1 style="margin-bottom: 20px;">Add Post</h1>
        <form method="POST">
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">@</div>
                    </div>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                </div>
            </div>

            <div class="form-group">
                <label for="image">Choose Image</label>
                <input type="file" class="form-control-file" id="image" name="image" onchange="previewImage()">
            </div>
            <div class="form-group">
                <img id="imagePreview" src="#" alt="Preview" style="display: none;">
            </div>

            <div class="form-group">
                <textarea class="form-control" id="post" name="post" rows="10" required placeholder="Post"></textarea>
            </div>

            <button type="submit" class="btn btn-success" name="action" value="update">Submit</button>
            <a href="/mvc" class="btn btn-danger">Cancel</a>
        </form>
    </div>
</body>

</html>