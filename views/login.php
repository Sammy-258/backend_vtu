<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 m-auto">
                <form action="login" method="post" class="shadow p-5 mt-5">
                    <input type="email" name="email" class="form-control my-3" placeholder="email here">
                    <input type="password" name="password" class="form-control my-3" placeholder="password here">
                    <button type="submit" name="submit" class="form-control btn py-2 bg-dark text-light">Submit</button>
                    <p>if you Don't Have an account register <a href="register">Here</a> or go <a href="/mvc">back</a> to home page</p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>