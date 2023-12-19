<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API using youtube</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h1>YouTube Video Information</h1>
        <div>
            <label for="videoLink">Enter YouTube Video Link:</label>
            <input type="text" id="videoLink" placeholder="Paste YouTube Video Link">
            <button id="cta">Add</button>
        </div>
        <span id="videoInfo"></span>
        

        <div class="table">
            <table>
                <thead>
                    <th>Title</th>
                    <th>Publis Date</th>
                    <th>Views</th>
                    <th>likes</th>
                    <th>Comments</th>
                </thead>
                <tbody id="tbody">
    
                </tbody>
            </table>
        </div>
    </div>
    
    <script src="script.js"></script>   
</body>
</html>