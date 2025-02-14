<?php
include("../header/Header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>POST</title>
  <link rel="stylesheet" href="../../styles/post.css" />
</head>

<body>
  <div class="post-container">
    <div class="post-page-head">
      <div>POST YOUR ASSET</div>
    </div>
    <div class="form-body">
      <form action="#" enctype="multipart/form-data">
        <div class="form-container">
          <div class="category-input">
            <label for="category"> Category</label><br>
            <select name="category" id="category">
              <option value="car">Car</option>
              <option value="House">House</option>
              <option value="electronics">Electronics</option>
              <option value="furniture">Furniture</option>
              <option value="cloth">Cloth</option>
              <option value="book">Book</option>
              <option value="party_supplies">Party Supplies</option>
            </select>
          </div>
          <div class="price-input">
            <label for="price">Price</label><br>
            <input type="number" id="price" />
          </div>
          <div class="price-type-input">
            <label for="price-fixed">Price Type:</label><br>
            <label>
              <input
                type="radio"
                name="price-type"
                id="price-fixed"
                value="fixed" />
              Fixed
            </label>
            <label>
              <input
                type="radio"
                name="price-type"
                id="price-negotiable"
                value="negotiable" />
              Negotiable
            </label>
          </div>

          <div class="city-input">
            <label for="city-list">City</label><br>
            <select name="city-list" id="city-list">
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
          <div class="owner-name-input">
            <label for="owner-name">Owner Name</label><br>
            <input type="text" id="owner-name" />
          </div>
          <div class="owner-number-input">
            <label for="owner-phone">Contact Number</label><br>
            <input type="phone" id="owner-phone" />
          </div>
          <div class="image-input">
            <label for="asset-image">Add Images</label><br>
            <input
              type="file"
              id="asset-image"
              name="asset-image"
              accept="image/*"
              multiple />
          </div>
          <input type="submit" value="POST" />
        </div>
      </form>
    </div>
  </div>
</body>

</html>
<?php
include("../footer/footer.php");
