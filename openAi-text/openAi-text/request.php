<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                <form id="text-generator-form">
                    <label for="prompt">Enter a prompt:</label>
                    <input type="text" id="prompt" name="prompt">
                    <button type="submit">Generate Text</button>
                </form>
            </div>
            <div class="col-8 mx-auto mt-5">
                <div class="alert alert-primary" role="alert">
                </div>
            </div>

        </div>
        </div>

        <script src="jquery.js"></script>
        <script>
            $(document).ready(function() {
                $('#text-generator-form').on('submit', function(event) {
                    event.preventDefault();
                    var prompt = $('#prompt').val();
                    $.ajax({
                        url: 'text-generator.php',
                        type: 'POST',
                        data: {
                            prompt: prompt
                        },
                        success: function(data) {
                            $('.alert-primary').html(data);
                        }
                    });
                });
            });
        </script>

</body>

</html>








</body>

</html>