const projectPost = new GetNews(projectParamsPage, "all_news");
projectPost.getAllPosts();
document
  .querySelector("#add_more_news_project")
  .addEventListener("click", () => {
    projectPost.morePost();
  });
