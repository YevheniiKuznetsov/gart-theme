const topNewsPagePosts = new GetNews(
  topNewsPageParams,
  "top_news_page_container"
);
topNewsPagePosts.getAllPosts();
document.querySelector("#show_more_posts").addEventListener("click", () => {
  topNewsPagePosts.morePost();
});
