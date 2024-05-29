<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <?php

        $name = $_POST['name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $country = $_POST['country'];
        $street = $_POST['street'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zip = $_POST['zip'];

    ?>

    <div class="container mx-auto pt-16 w-1/3 font-sans">
        <form action="./hwork8.php" method="post">
        <div class="flex-auto mx-auto">
            <h3 class="text-lg flex">Personal information</h3>
            <p>Use a permanent adress where you can receive mail.</p>
        </div>
        <section class="flex flex-col mt-6 gap-4 xl:flex-row">
            <div class="flex flex-col grow">
                <label for="name">First Name</label>
                <input type="text" name="name" maxlength="17" class="border-2 rounded mt-1 focus:outline-none focus:border-indigo-600">
            </div>
            <div class="flex flex-col grow">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" maxlength="17" class="border-2 rounded mt-1 focus:outline-none focus:border-indigo-600">
            </div>
        </section>
        <section class="mt-6">
            <div class="flex flex-col">
                <label for="email">Email adress</label>
                <input type="text" name="email" maxlength="30" class="border-2 rounded w-2/3 mt-1 focus:outline-none focus:border-indigo-600">
            </div>
        </section>
        <section class="mt-6 flex flex-col">
            <label for="country">Country</label>
            <select name="country" id="country" class="border-2 rounded w-full mt-1 focus:outline-none focus:border-indigo-600 sm:w-1/2">
                <option value="Latvia">Latvia</option>
                <option value="Estonia">Estonia</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Russia">Russia</option>
                <option value="Belarus">Belarus</option>
            </select>
        </section>
        <section class="mt-6 flex flex-col">
            <label for="street">Street Address</label>
            <input type="text" name="street" class="border-2 rounded w-full mt-1 focus:outline-none focus:border-indigo-600">
        </section>
        <section class="mt-6 flex mx-auto flex-col gap-6 xl:flex-row">
            <div class="w-1/3">
                <label for="city">City</label>
                <input type="text" name="city" class="border-2 rounded  mt-1 focus:outline-none focus:border-indigo-600 xl:w-full">
            </div>
            <div class="w-1/3">
                <label for="state">State / Province</label>
                <input type="text" name="state" class="border-2 rounded  mt-1 focus:outline-none focus:border-indigo-600 xl:w-full">
            </div>
            <div class="w-1/3">
                <label for="zip">ZIP / Postal code</label>
                <input type="text" name="zip" class="border-2 rounded  mt-1 focus:outline-none focus:border-indigo-600 xl:w-full">
            </div>
        </section>
        <section>
        <input type="submit" value="Submit" class="flex justify-center mx-auto w-1/2 border-2 rounded mt-6 md:w-64">
        </section>
        </form>
        <div class="flex flex-col mx-auto mt-6 text-center text-lg text-violet-400">

        <?php 

            // $push = "
            // <p class='text-lg'>Name: </p> $name 
            // <p class='text-lg'>Surname: </p> $last_name 
            // <p class='text-lg'>Email: </p> $email 
            // <p class='text-lg'>Country: </p> $country
            // <p class='text-lg'>Address:  </p> $street
            // <p class='text-lg'>City: </p> $city 
            // <p class='text-lg'>State: </p> $state 
            // <p class='text-lg'>Postal code: </p> $zip";
            // echo $push;

            if (!empty($name) and !empty($last_name) and !empty($email) and !empty($country) and !empty($street) and !empty($city) and !empty($state) and !empty($zip)) {
                echo "<p>First Name: " .$name. "</p>";
                echo "<p>Last Name: " .$last_name. "</p>";
                echo "<p>Email: " .$email. "</p>";
                echo "<p>Country: " .$country. "</p>";
                echo "<p>Adress: " .$street. "</p>";
                echo "<p>City: " .$city. "</p>";
                echo "<p>State: " .$state. "</p>";
                echo "<p>Postal code: " .$zip. "</p>";
            } else {
                echo "Did you forget to fill one of the fields?";
            };

        ?>
        </div>
    </div>
</body>
</html>