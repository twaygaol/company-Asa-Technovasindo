<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= esc($title); ?>
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="" style="padding:10px;margin-top:70px;">
    <h1 class="text-center" style="font-size:20px;">PLEASE LOGIN HERE</h1>
    <p class="text-center text-red-500">
        <?php
        if (isset($session) && !empty($message)) {
            echo $message;
        }
        ?>
    </p>
    <form class="mt-4 mx-auto py-4" action="/login/auth" method="post" style="border:2px solid gray;padding:15px;width:350px;border-radius:5px;margin-top:70px;background:gray;">
        <input type="hidden" name="{csrf_token}" value="{csrf_hash}">
        <div class="">
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-white dark:text-white">Alamat Email</label>
                <input type="email" id="email"
                    class="" style="padding:10px;border-radius:5px;width:300px;"
                    placeholder="admin.@gmail.com" name="email">
            </div><br>
            <div class="mb-4" style="">
                <label for="password"
                    class="block mb-2 text-sm font-medium text-white dark:text-white">Kata Sandi</label>
                <input type="password" id="password"
                    class="" style=" padding:10px; border-radius:5px;width:300px;"
                    placeholder="•••••••••" name="password">
            </div>
        </div>
        <button type="submit" style="width:300px;"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Masuk</button>
        <!-- <a href="/register" class="ml-4 text-sm">or register here</a> -->
    </form>
</div>
</body>
</html>

