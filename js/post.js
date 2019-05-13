document.querySelector('#button').addEventListener('click', (e) => {
  const message = document.querySelector('#msg').value;
  $.post("post.php", {message: message}, function(data) {
    doTheRefresh();
  });

  e.preventDefault();
});
