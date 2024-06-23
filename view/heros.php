<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #2d0039; /* Dark purple background */
            color: #e0e0e0; /* Light grey text */
        }
        .container {
            padding: 40px;
        }
        .btn-custom {
            background-color: #5e548e; /* Purple shade */
            color: #f0f0f0; /* Off-white text */
            border: none;
            border-radius: 15px;
            box-shadow: 0 0 8px #7f78d2, 0 0 15px #7f78d2, 0 0 30px #7f78d2; /* Neon glow effect */
        }
        .btn-custom:hover {
            background-color: #9f86c0; /* Lighter purple on hover */
            color: #ffffff;
        }
        #role-list {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4">Mobile Legends Hero Roles</h2>
        <div id="role-list" class="d-flex flex-column align-items-center">
            <div class="btn btn-custom mb-2">Tank</div>
            <div class="btn btn-custom mb-2">Fighter</div>
            <div class="btn btn-custom mb-2">Assassin</div>
            <div class="btn btn-custom mb-2">Mage</div>
            <div class="btn btn-custom mb-2">Marksman</div>
            <div class="btn btn-custom mb-2">Support</div>
        </div>
    </div>
</body>
</html>
