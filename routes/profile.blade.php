<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile form</title>
</head>
<body>
    <h2>Profile form</h2>
    <form action="{{ url('/profile') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label>full name :</label><br>
        <input type="text" name="name"><br><br>

        <label>e-mail</label><br>
        <input type="email" name="email"><br><br></title>
</head>
<body>
    <h2>Profile form</h2>
    <form action="{{ url('/profile') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label>full name :</label><br>
        <input type="text" name="name"><br><br>

        <label>e-mail :</label><br>
        <input type="email" name="email"><br><br>
        <label> phone number:</label><br>
        <input type="text" name="phone"><br><br>

        <label>About the user :</label><br>
        <textarea name="bio"></textarea><br><br>

        <label>Personal photo:</label><br>
        <input type="file" name="avatar"><br><br>

        <button type="submit">send</button>
    </form>
</body>
</html>