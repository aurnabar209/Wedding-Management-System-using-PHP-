<?php
include('connection.php');
$query = "SELECT * FROM gallery";
$result = mysqli_query($conn, $query);

// Display images
while ($row = mysqli_fetch_assoc($result)) {
  echo '<div class="gallery-item">';
  echo '<img src="image/'. $row['image_url']. '" alt="'. $row['image_title']. '">';
  echo '<div class="gallery-item-info">';
  echo '<p>'. $row['image_title']. '</p>';
  echo '<p>'. $row['image_description']. '</p>';
  echo '</div>';
  echo '</div>';
}
?>