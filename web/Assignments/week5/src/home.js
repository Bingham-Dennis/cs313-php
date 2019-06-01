/*
  @accent: OMDb API key
  @accent: 2ef24ea

  @accent: The Movie DB key
  @accent: a2353013d1a5ef67c2d144ec61b061b5
*/

async function connectDB() {
  let result;

  try {
    result = await $.ajax({
        url: './connect.php',
        type: 'POST'
    });

    return result;
  } catch (error) {
    console.error(error);
  }
}
