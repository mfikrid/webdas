<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Dasar Ajax</title>
</head>

<body>
    <h1>kirimkan curhatan hati</h1>
    <form method="POST" onsubmit="return sendData()">
        <p>
            <label>Judul </label>
            <input type="text" id="title" placeholder="isi Judul..">
        </p>

        <p>
            <label>Isi curhatan</label><br>
            <textarea id="body" placeholder="isi curhatan..." cols="50" rows="10"></textarea>
        </p>
        <input type="submit" value="Kirim" />
    </form>
    <script>
        function sendData() {
            var xhr = new XMLHttpRequest();
            var url = "https://jsonplaceholder.typicode.com/posts";
            var data = JSON.stringify({
                title: document.getElementById("title").value,
                body: document.getElementById("body").value,
                userId: 1
            });
            xhr.open("POST", url, true);
            xhr.setRequestHeader("Content-Type",
                "application/json;charset=UTF-8");
            xhr.onload = function() {
                console.log(this.responseText);
            };
            xhr.send(data);
            return false;
        }
    </script>
</body>

</html>