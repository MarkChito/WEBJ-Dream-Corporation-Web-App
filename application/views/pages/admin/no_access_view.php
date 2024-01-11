<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Desktop View Required</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>dist/images/favicon.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>plugins/admin-lte/css/adminlte.min.css">

    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .desktop-message {
            text-align: center;
            padding: 20px;
            border: 2px solid #dc3545;
            border-radius: 10px;
            background-color: #fff;
        }

        .desktop-message h2 {
            font-size: 24px;
            color: #dc3545;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .desktop-message p {
            font-size: 18px;
            color: #333;
            margin-bottom: 20px;
        }

        @media (max-width: 768px) {
            .desktop-message h2 {
                font-size: 20px;
            }

            .desktop-message p {
                font-size: 16px;
            }
        }
    </style>
</head>

<body>
    <div class="desktop-message">
        <h2>Best Viewed on Desktop or Laptop</h2>
        <p>This website is optimized for larger screens. For an optimal experience, please switch to a desktop or laptop.</p>
        <button class="btn btn-danger btn_logout">Logout</button>
    </div>

    <!-- jQuery -->
    <script src="<?= base_url() ?>plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= base_url() ?>plugins/jquery-ui/jquery-ui.min.js"></script>

    <script>
        $(document).ready(function() {
            var base_url = "<?= base_url() ?>";

            $(".btn_logout").click(function() {
                var formData = new FormData();

                formData.append('logout', true);

                $.ajax({
                    url: base_url + 'server/logout',
                    data: formData,
                    type: 'POST',
                    dataType: 'JSON',
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        location.href = base_url;
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            })
        })
    </script>
</body>

</html>