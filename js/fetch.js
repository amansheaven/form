function doTheRefresh() {
  $('#load_tweets').load('posts.php').fadeIn("slow");
}
doTheRefresh();
const auto_refresh = setInterval(
() => {
  doTheRefresh();
  }, 2000); 
