<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="container">
    <h1>Add a New Movie</h1>
    <form action="{{ url('/movies') }}" method="POST" enctype="multipart/form-data">
        @csrf <!-- CSRF token for security -->

        <div class="form-group">
            <label for="title">Movie Title:</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="form-group">
            <label for="genre">Genre:</label>
            <input type="text" class="form-control" id="genre" name="genre" required>
        </div>

        <div class="form-group">
            <label for="duration">Duration:</label>
            <input type="text" class="form-control" id="duration" name="duration" required>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" required></textarea>
        </div>

        <div class="form-group">
            <label for="image">Movie Image:</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>

        <div class="form-group">
            <label for="rating">Rating:</label>
            <input type="text" class="form-control" id="rating" name="rating" required>
        </div>

        <div class="form-group">
            <label for="show_times">Show Times:</label>
            <input type="text" class="form-control" id="show_times" name="show_times" required placeholder="Use comma to separate times">
        </div>

        <div class="form-group">
            <label for="language">Language:</label>
            <input type="text" class="form-control" id="language" name="language" required>
        </div>

        <button type="submit" class="btn btn-primary">Add Movie</button>
    </form>
</div>

</body>
</html>
