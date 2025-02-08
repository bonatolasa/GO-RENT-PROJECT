<?php
include("../header/Header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Geologica:wght@100..900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="../../styles/furniture.css" />

  <title>Gorent - Furniture</title>
</head>

<body>
  <main>
    <section class="furniture-section">
      <p class="furniture-head">Stylish Furniture for Your Events</p>
      <div class="furniture-page-container">
        <div class="filter-side">
          <p class="filter-header"><b>FIND YOUR MATCH</b></p>
          <form action="#">
            <label for="price">Max</label>
            <input
              class="price-filter"
              type="number"
              id="price"
              placeholder="Maximum" />
            <label for="price"> Min</label>
            <input
              class="price-filter"
              type="number"
              id="price"
              placeholder="Minimum" />
          </form>
          <div>
            <label for="city">City</label>
            <br />
            <select name="city-list" id="city">
              <option value="Addis Ababa">Addis Ababa</option>
              <option value="Jimma">Jimma</option>
              <option value="Jimma">Adama</option>
              <option value="Bahir Dar">Bahir Dar</option>
              <option value="Nekemte">Nekemte</option>
              <option value="Hawassa">Hawassa</option>
              <option value="Dire Dawa">Dire Dawa</option>
              <option value="Jigjiga">Jigjiga</option>
              <option value="Mekele">Mekele</option>
              <option value="Mekele">Ambo</option>
              <option value="Mekele">Lega Tafo</option>
            </select>
          </div>
          <p class="price">PRICE TYPE</p>

          <input type="radio" name="price" id="price-type" vlaue="fixed" />
          <label for="price-type">Fixed</label>
          <input
            type="radio"
            name="price"
            id="price-type"
            value="Negotiable" />
          <label for="price-type-filter">Negotiable</label>

          <input class="submit-filter" type="submit" value="FIND" />
        </div>
        <div class="furniture-container">
          <div class="furniture-box">
            <div class="furniture">
              <img
                class="furniture-img"
                src="../../images/furnitures/furniture1.webp"
                alt="" />
              <div class="div furniture-explanation">
                <p class="furniture-title">Wedding Bride Chair</p>
                <p class="furniture-price">1200 ETB/day</p>
                <p class="price-type">Fixed</p>

                <p class="furniture-address">Addis Ababa, Bole</p>
              </div>
              <div class="saved-phone-container">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="saved-icon">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                </svg>
                <p
                  class="show-phone"
                  id="toggleText"
                  onclick="toggleContent()">
                  SHOW PHONE
                </p>
              </div>
            </div>
          </div>
          <div class="furniture-box">
            <div class="furniture">
              <img
                class="furniture-img"
                src="../../images/furnitures/furniture2.jpg"
                alt="" />
              <div class="div furniture-explanation">
                <p class="furniture-title">Luxury Dining Chairs</p>
                <p class="furniture-price">1200 ETB/ day</p>
                <p class="price-type">Fixed</p>
                <p class="furniture-address">Nekemte, Bord</p>
              </div>
              <div class="saved-phone-container">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="saved-icon">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                </svg>
                <p
                  class="show-phone"
                  id="toggleText"
                  onclick="toggleContent()">
                  SHOW PHONE
                </p>
              </div>
            </div>
          </div>
          <div class="furniture-box">
            <div class="furniture">
              <img
                class="furniture-img"
                src="../../images/furnitures/furniture3.avif"
                alt="" />
              <div class="div furniture-explanation">
                <p class="furniture-title">Big guest Party Sofa</p>
                <p class="furniture-price">3000 ETB/ day</p>
                <p class="price-type">Fixed</p>
                <p class="furniture-address">Addis Ababa, Kaliti</p>
              </div>
              <div class="saved-phone-container">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="saved-icon">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                </svg>
                <p
                  class="show-phone"
                  id="toggleText"
                  onclick="toggleContent()">
                  SHOW PHONE
                </p>
              </div>
            </div>
          </div>
          <div class="furniture-box">
            <div class="furniture">
              <img
                class="furniture-img"
                src="../../images/furnitures/furniture4.webp"
                alt="" />
              <div class="div furniture-explanation">
                <p class="furniture-title">Plastic Event Chair</p>
                <p class="furniture-price">1000 ETB/Day</p>
                <p class="price-type">Fixed</p>
                <p class="furniture-address">Hawassa</p>
              </div>
              <div class="saved-phone-container">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="saved-icon">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                </svg>
                <p class="show-phone">SHOW PHONE</p>
              </div>
            </div>
          </div>
          <div class="furniture-box">
            <div class="furniture">
              <img
                class="furniture-img"
                src="../../images/furnitures/furniture5.jpg"
                alt="" />
              <div class="div furniture-explanation">
                <p class="furniture-title">Classic living room</p>
                <p class="furniture-price">6500 ETB/ Month</p>
                <p class="price-type">Fixed</p>
                <p class="furniture-address">Adama, Franko</p>
              </div>
              <div class="saved-phone-container">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="saved-icon">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                </svg>
                <p
                  class="show-phone"
                  id="toggleText"
                  onclick="toggleContent()">
                  SHOW PHONE
                </p>
              </div>
            </div>
          </div>
          <div class="furniture-box">
            <div class="furniture">
              <img
                class="furniture-img"
                src="../../images/furnitures/furniture6.jpg"
                alt="" />
              <div class="div furniture-explanation">
                <p class="furniture-title">Dining Set Chairs</p>
                <p class="furniture-price">1000 ETB/day</p>
                <p class="price-type">Negotiable</p>
                <p class="furniture-address">Addis Ababa, 4 Kilo</p>
              </div>

              <div class="saved-phone-container">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="saved-icon">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                </svg>
                <p
                  class="show-phone"
                  id="toggleText"
                  onclick="toggleContent()">
                  SHOW PHONE
                </p>
              </div>
            </div>
          </div>
          <div class="furniture-box">
            <div class="furniture">
              <img
                class="furniture-img"
                src="../../images/furnitures/furniture7.webp"
                alt="" />
              <div class="div furniture-explanation">
                <p class="furniture-title">Decorated Banquet Chairs</p>
                <p class="furniture-price">150 ETB/day</p>
                <p class="price-type">Fixed</p>
                <p class="furniture-address">Nekemte</p>
              </div>
              <div class="saved-phone-container">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="saved-icon">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                </svg>
                <p
                  class="show-phone"
                  id="toggleText"
                  onclick="toggleContent()">
                  SHOW PHONE
                </p>
              </div>
            </div>
          </div>
          <div class="furniture-box">
            <div class="furniture">
              <img
                class="furniture-img"
                src="../../images/furnitures/furniture9.jpg"
                alt="" />
              <div class="div furniture-explanation">
                <p class="furniture-title">
                  Traditional Wooden sponge Chairs
                </p>
                <p class="furniture-price">1500 ETB/ Month</p>
                <p class="price-type">Negotiable</p>
                <p class="furniture-address">Nekemte, Jitu</p>
              </div>
              <div class="saved-phone-container">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="saved-icon">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                </svg>
                <p
                  class="show-phone"
                  id="toggleText"
                  onclick="toggleContent()">
                  SHOW PHONE
                </p>
              </div>
            </div>
          </div>
          <div class="furniture-box">
            <div class="furniture">
              <img
                class="furniture-img"
                src="../../images/furnitures/furniture9.jpg"
                alt="" />
              <div class="div furniture-explanation">
                <p class="furniture-title">Living room sofa sets:</p>
                <p class="furniture-price">800 ETB/ Month</p>
                <p class="price-type">Negotiable</p>
                <p class="furniture-address">Addis Ababa, Asko</p>
              </div>
              <div class="saved-phone-container">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="saved-icon">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                </svg>
                <p
                  class="show-phone"
                  id="toggleText"
                  onclick="toggleContent()">
                  SHOW PHONE
                </p>
              </div>
            </div>
          </div>
          <div class="furniture-box">
            <div class="furniture">
              <img
                class="furniture-img"
                src="../../images/furnitures/furniture11.jpg"
                alt="" />
              <div class="div furniture-explanation">
                <p class="furniture-title">Stackable White Plastic Chairs</p>
                <p class="furniture-price">100 ETB/day</p>
                <p class="price-type">Fixed</p>
                <p class="furniture-address">Addis Ababa, Summit</p>
              </div>
              <div class="saved-phone-container">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="saved-icon">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                </svg>
                <p
                  class="show-phone"
                  id="toggleText"
                  onclick="toggleContent()">
                  SHOW PHONE
                </p>
              </div>
            </div>
          </div>
          <div class="furniture-box">
            <div class="furniture">
              <img
                class="furniture-img"
                src="../../images/furnitures/furniture14.jpg"
                alt="" />
              <div class="div furniture-explanation">
                <p class="furniture-title">Traditional Wooden Chairs</p>
                <p class="furniture-price">2500 ETB/month</p>
                <p class="price-type">Negotiable</p>
                <p class="furniture-address">Lega Tafo, Shegar</p>
              </div>
              <div class="saved-phone-container">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="saved-icon">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                </svg>
                <p
                  class="show-phone"
                  id="toggleText"
                  onclick="toggleContent()">
                  SHOW PHONE
                </p>
              </div>
            </div>
          </div>
          <div class="furniture-box">
            <div class="furniture">
              <img
                class="furniture-img"
                src="../../images/furnitures/furniture13.jpg"
                alt="" />
              <div class="div furniture-explanation">
                <p class="furniture-title">Stackable White Plastic Chairs</p>
                <p class="furniture-price">12000 ETB/ Month</p>
                <p class="price-type">Negotiable</p>
                <p class="furniture-address">Jimma, Ginjo</p>
              </div>
              <div class="saved-phone-container">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="saved-icon">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                </svg>
                <p
                  class="show-phone"
                  id="toggleText"
                  onclick="toggleContent()">
                  SHOW PHONE
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
      </div>
    </section>
  </main>
  <script src="script.js"></script>
</body>

</html>