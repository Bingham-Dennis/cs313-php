let movies = undefined;
let localStorage = window.localStorage;

/******************************************************************************
 *  Loads movies from the server for the logged in user.
 *****************************************************************************/
async function getMovies() {
  try {
   let results = await $.ajax({
        url: './retrieveMovies.php',
        type: 'POST'
    });
    movies = JSON.parse(results);
    if (Array.isArray(movies)) {
      movies.forEach((movie) => {
        buildMovieItem(movie);
        localStorage.setItem(movie.title.replace(/\s+/g, '_'), JSON.stringify(movie));
      });
    }
  } catch (error) {
    console.error(error);
  }
}

/******************************************************************************
 * Builds the movie link for the user to click on.
 *****************************************************************************/
function buildMovieItem(movie) {
    let a = document.createElement('a');

    let d = document.createElement('div');

    // make id
    let id = movie.title.replace(/\s+/g, '_');

    let movieUrl = './movie.php?id=' + id;
    a.setAttribute('href', movieUrl);

    d.setAttribute('class', 'moviePoster');
    d.setAttribute('id', id);

    a.appendChild(d);

    document.getElementById('moviesContainer').appendChild(a);

    let imageUrl = "url('./poster_art/" + movie.artwork + "')";
    let size = 'cover';
    let position = 'center';
    let repeat = 'no-repeat';

    document.getElementById(id).style.backgroundImage = imageUrl;
    document.getElementById(id).style.backgroundSize = size;
    document.getElementById(id).style.backgroundPosition = position;
    document.getElementById(id).style.backgroundRepeat = repeat;
}

/******************************************************************************
 * Gets the specific movie that the user clicked on.
 *****************************************************************************/
function getMovie() {
  let id = window.location.search.split('id=')[1] ? window.location.search.split('id=')[1] : 'undefined';
  let movie = JSON.parse(localStorage.getItem(id));

  let v = document.createElement('video');

  v.setAttribute('width', '600');
  v.setAttribute('height', '400');
  v.controls = true;

  let s = document.createElement('source');

  let movieUrl = './movie_files/' + movie.moviefile;
  s.setAttribute('src', movieUrl);
  s.setAttribute('type', 'video/mp4');

  v.appendChild(s);

  document.getElementById('movieContainer').appendChild(v);
}

/*
<video width="600" height="400" controls>
        <source src="./movie_files/Elephants Dream (2006).mp4" type="video/mp4">
      </video>
*/
