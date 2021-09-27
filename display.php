<?php    
include_once 'db.php';

$sql = $conn->query("SELECT * FROM user");
?>

<?php
    while($rows=$sql->fetch_assoc())
    {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="formscript.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.15/tailwind.min.css" integrity="sha512-braXHF1tCeb8MzPktmUHhrjZBSZknHvjmkUdkAbeqtIrWwCchhcpUeAf2Sq3yIq1Q1x5PlroafjceOUbIE3Q5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Contact Form</title>
</head>
<body>
    <div class="min-h-screen flex items-center justify-center bg-pink-300">
    
        <div class="bg-pink-100 p-8 rounded shadow-2xl w-1/2">

            <h2 class="text-4xl font-bold mb-4 text-gray-500">Direct Lending List</h2>

            <form class="space-y-6" id="form">
                
                    <div>
                        <label for="" class="block mb-2 text-gray-500 font-semibold">Name</label>
                        <p class="w-full rounded bg-gray-300 bg-opacity-50 px-2 py-4 focus:outline-none">
                            <?php echo $rows['name'];?>
                        </p>
                    </div>
                    
                    <div>
                        <label for="" class="block mb-2 text-gray-500 font-semibold">Date of Birth</label>
                        <p class="w-full rounded bg-gray-300 bg-opacity-50 px-2 py-4 focus:outline-none">
                            <?php echo $rows['dob'];?>
                        </p>
                    </div>

                    <div>
                        <label for="" class="block mb-2 text-gray-500 font-semibold">Address</label>
                        <p class="w-full rounded bg-gray-300 bg-opacity-50 px-2 py-4 focus:outline-none">
                            <?php echo $rows['address'];?>
                        </p>
                    </div>
                    
                    <div>
                        <label for="" class="block mb-2 text-gray-500 font-semibold">ZIP</label>
                        <p class="w-full rounded bg-gray-300 bg-opacity-50 px-2 py-4 focus:outline-none">
                            <?php echo $rows['zip'];?>
                        </p>
                    </div>
                    
                    <div>
                        <label for="" class="block mb-2 text-gray-500 font-semibold">State</label>
                        <p class="w-full rounded bg-gray-300 bg-opacity-50 px-2 py-4 focus:outline-none">
                            <?php echo $rows['state'];?>
                        </p>
                    </div>
                
            </form>
        </div>
    </div>
    
</body>
</html>
<?php
    }
?>