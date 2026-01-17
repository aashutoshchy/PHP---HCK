let form = document.getElementById("form");
let title = document.getElementById("title");

form.addEventListener("submit", (e) => {
  e.preventDefault();
  let input = document.getElementById("input").value;
  movieFind(input);
});

async function movieFind(movieName) {
  let res = await fetch(`http://localhost/MOVIE/practise.php?q=${movieName}`);
  let data = await res.json();

  title.innerHTML = data[0].Title;
}
