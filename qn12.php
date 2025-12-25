<!DOCTYPE html>
<html>
<head>
    <title>Movies List</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        img {
            max-width: 80px;
        }
    </style>
</head>
<body>
    <h2>Movies List</h2>
    <table id="moviesTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Poster</th>
                <th>Year</th>
                <th>Genre</th>
                <th>Rating</th>
                <th>Director</th>
                <th>Country</th>
                <th>Language</th>
                <th>Actors</th>
            </tr>
        </thead>
        <tbody>
            <!-- Data will be injected here -->
        </tbody>
    </table>

    <script>
        $(document).ready(function(){
            $.ajax({
                url: "https://github.com/elizhabiboullah/FreeTestAPI-Movies-API",
                type: "GET",
                success: function(data){
                    let rows = "";
                    data.forEach(function(movie){
                        rows += `
                            <tr>
                                <td>${movie.id}</td>
                                <td>${movie.title}</td>
                                <td><img src="${movie.poster}" alt="Poster"></td>
                                <td>${movie.year}</td>
                                <td>${movie.genre}</td>
                                <td>${movie.rating}</td>
                                <td>${movie.director}</td>
                                <td>${movie.country}</td>
                                <td>${movie.language}</td>
                                <td>${movie.actors.join(", ")}</td>
                            </tr>
                        `;
                    });
                    $("#moviesTable tbody").html(rows);
                },
                error: function(){
                    alert("Failed to fetch movie data.");
                }
            });
        });
    </script>
</body>
</html>