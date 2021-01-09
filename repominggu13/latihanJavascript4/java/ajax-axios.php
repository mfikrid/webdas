<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tutorial AJAX dengan AXIOS</title>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>

<body>
    <h1>Tutorial AJAX dengan AXIOS</h1>
    <button id="btn-load" onclick="loadContent()">Load Content</button>
    <div id="result"></div>
    <script>
        function loadContent() {
            document.getElementById("btn-load").innerHTML = "loading...";
            document.getElementById("btn-load").setAttribute("disabled", "true");
            axios.get('https://jsonplaceholder.typicode.com/posts/')
                .then(function(response) {
                    var template = response.data.map(post => {
                        return `
                        <h3>${post.title}</h3>
                        <p>${post.body}</p>
                        <hr>
                        `
                    }).join("");
                    document.getElementById("result").innerHTML = template;
                })
                .catch(function(error) {
                    // handle error
                    console.log(error);
                })
                .then(function() {
                    document.getElementById("btn-load").innerHTML = "Done";
                    document.getElementById("btnload").removeAttribute("disabled");
                });
        }
    </script>
</body>

</html>