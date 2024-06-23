// Function to add a hero
function addHero() {
    var name = document.getElementById('name').value;
    var role = document.getElementById('role').value;
    var description = document.getElementById('description').value;

    $.ajax({
        type: "POST",
        url: "php/insertHero.php",
        data: {name: name, role: role, description: description},
        success: function(response) {
            console.log(response);
            document.getElementById('message').innerHTML = response;
        },
        error: function() {
            console.log("Error occurred while sending request.");
            document.getElementById('message').innerHTML = "Error occurred while adding the hero.";
        }
    });
}
