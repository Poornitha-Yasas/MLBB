<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Dashboard</title>
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
        #data-display {
            margin-top: 30px;
            padding: 20px;
            background-color: #3d2c57; /* Deep purple background */
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.3);
            animation-name: fadeIn;
            animation-duration: 1s;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4">Mobile Legends Advanced Stats Dashboard</h2>
        <div id="dashboard-options" class="d-flex justify-content-center flex-wrap gap-2">
            <button type="button" class="btn btn-custom" onclick="loadData('option1')">Player Stats</button>
            <button type="button" class="btn btn-custom" onclick="loadData('option2')">Game History</button>
            <button type="button" class="btn btn-custom" onclick="loadData('option3')">Rankings</button>
            <button type="button" class="btn btn-custom" onclick="loadData('option4')">Heros</button>
            <button type="button" class="btn btn-custom" onclick="loadData('option5')">Win Rates</button>
        </div>
        <div id="data-display" class="text-center">
            <!-- Data will be displayed here -->
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        function loadData(option) {
            if (option === 'option4') {
                window.location.href = 'heros.php'; // Navigate to heros.php
            } else {
                $.ajax({
                    url: 'fetch_data.php',
                    type: 'POST',
                    data: { option: option },
                    success: function(response) {
                        $('#data-display').html(response).css('animation', 'fadeIn 1s');
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX Error:", status, error);
                        alert('Error loading data: ' + error);
                    }
                });
            }
        }
    </script>
</body>
</html>
