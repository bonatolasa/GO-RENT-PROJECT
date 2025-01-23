<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="../Images/logo1.png" type="image/png" />
  <title>Go-Rent</title>
  <link rel="stylesheet" href="../../styles/header.css" />
</head>

<body>
  <div class="container">
    <nav>
      <div class="saved link-in-header">
        <a href="#">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="header-icon">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
          </svg>
          Saved
        </a>
      </div>
      <div class="login link-in-header">
        <a href="#">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="header-icon">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15M12 9l3 3m0 0-3 3m3-3H2.25" />
          </svg>

          Login
        </a>
      </div>
      <div class="account link-in-header">
        <a href="#">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="header-icon">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
          </svg>
          Creat Account
        </a>
      </div>
      <div class="post link-in-header">
        <a href="#">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="header-icon">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M19.114 5.636a9 9 0 0 1 0 12.728M16.463 8.288a5.25 5.25 0 0 1 0 7.424M6.75 8.25l4.72-4.72a.75.75 0 0 1 1.28.53v15.88a.75.75 0 0 1-1.28.53l-4.72-4.72H4.51c-.88 0-1.704-.507-1.938-1.354A9.009 9.009 0 0 1 2.25 12c0-.83.112-1.633.322-2.396C2.806 8.756 3.63 8.25 4.51 8.25H6.75Z" />
          </svg>
          Post Product
        </a>
      </div>
    </nav>
    <header class="header-part">
      <div class="logo-text">
        <div class="logo">
          <img src="../../ALogo/logow.png" alt="go-rent-logo" />
        </div>
        <div class="go-rent-text">Go-Rent</div>
      </div>

      <!-- SEARCH CONTAINER  START-->
      <!-- SEARCH CONTAINER  START-->

      <div class="search-container">
        <div class="search-barr">
          <div class="category-all">
            <div class="all">
              <select name="all" id="all">
                <option value selected="selected" disabled>
                  Select Category
                </option>
                <option value="Home">Home</option>
                <option value="House">House</option>
                <option value="Electronics">Electronics</option>
                <option value="Furnitures">Furnitures</option>
                <option value="Vehicles">Vehicles</option>
                <option value="Clothing">Clothing</option>
              </select>
            </div>
          </div>
          <form class="searching">
            <label for="search"></label>
            <input
              class="search-bar-text"
              type="text"
              id="search"
              name="search"
              placeholder="Search Go-Rent..." />
            <input
              type="submit"
              name="submit"
              value="Search"
              class="submitting" />
          </form>
        </div>
      </div>

      <!-- SEARCH CONTAINER  END-->
      <!-- SEARCH CONTAINER  END-->
    </header>
    <div class="categories">
      <a href="#" class="category">Home</a>
      <a href="#" class="category">House</a>
      <a href="#" class="category">Electronics</a>
      <a href="#" class="category">Furnitures</a>
      <a href="#" class="category">Vehicles</a>
      <a href="#" class="category">Clothing</a>
    </div>
  </div>
</body>

</html>