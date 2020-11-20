<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>publish news</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <h1>Upload News</h1>
    <div container>
    <label for="writer">Writer</label>
        <input type="text" name="writer"><br>
    <label for="date">Date</label>
        <input type="date" name="date"><br>
    <label for="Category">Category</label>
        <select name="Category">
            <option value="Select">Select</option>
            <option value="Community">Community</option>
            <option value="Politics">Politics</option>
            <option value="Crime">Crime</option>
            <option value="Sport">Sport</option>
        </select><br>
        <label for="heading">Heading</label>
        <input type="text" name="heading"><br>
        <label for="image">Image</label>
        <input type="file" name="image"><br>
        <label for="content">Content</label>
        <input type="textarea" name="content"><br>
      
    
        <input type="submit" name="upload" value="Upload">

    </div>

</body>

</html>