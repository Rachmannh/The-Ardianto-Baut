$('#movie-list').on('click', '.see-detail', function () {

    $.ajax({
        url: 'http://omdbapi.com',
        dataType: 'json',
        type: 'GET',
        data: {
            'apikey': '32bc90b',
            'i': $(this).data('id')
        },
        success: function (movie) {
            if (movie.Response === "True") {

                $('.modal-body').html(`
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="${movie.Poster}" class="img-fluid">
                            </div>
                            <div class="col-md-8">
                                <ul class="list-group">
                                    <li class="list-group-item"><h3>${movie.Title}</h3></li>
                                    <li class="list-group-item"><strong>Genre : </strong>${movie.Genre}</li>
                                    <li class="list-group-item"><strong>Released : </strong>${movie.Released}</li>
                                    <li class="list-group-item"><strong>Rated : </strong>${movie.Rated}</li>
                                    <li class="list-group-item"><strong>IMDB Rating : </strong>${movie.imdbRating}</li>
                                    <li class="list-group-item"><strong>Director : </strong>${movie.Director}</li>
                                    <li class="list-group-item"><strong>Writer : </strong>${movie.Writer}</li>
                                    <li class="list-group-item"><strong>Actors : </strong>${movie.Actors}</li>
                                    <li class="list-group-item"><strong>Plot : </strong>${movie.Plot}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                `);

            }
        }
    })

});