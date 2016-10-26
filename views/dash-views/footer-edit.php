<div class="container-fluid">
  <div class="row">
    <hr>
    <h3>Location: Find Us</h3>
    <hr>
  </div>
  <div class="row">
    <form class="" action="edit-footer.php" method="post">
      <input class="form-control margin-top" type="text" name="street" placeholder="Street or Road">
      <input class="btn btn-primary" type="submit" name="saveStreet" value="Save">
      <input class="form-control margin-top" type="text" name="building" placeholder="Building">
      <input class="btn btn-primary" type="submit" name="saveBuilding" value="Save">
      <input class="form-control margin-top" type="text" name="floor" placeholder="Building Floor">
      <input class="btn btn-primary" type="submit" name="saveFloor" value="Save">
      <br>
      <input class="btn btn-lg btn-primary margin-top" name="saveLocation" type="submit" value="Save All">
    </form>
  </div>
  <div class="row">
    <hr>
    <h3>Map</h3>
    <hr>
  </div>
  <div class="row">
      <h3>Instructions</h3>
      <p>
        <ol class="text-left">
          <li>On Your Web/Internet Browser, Navigate to maps.google.com</li>
          <li>Find and Click on the building in which your company is located</li>
          <li>On the top left hand side of the web page, find and click on the menu icon</li>
          <li>Navigate to share and embed option</li>
          <li>On the modal that appears, choose the custom option</li>
          <li>Use <i style="color: red;">200px height</i>  and <i style="color: red;">400px width</i> </li>
          <li>Copy and paste the highlighted content to the text area below.</li>
        </ol>
      </p>
      <form class="" action="edit-footer.php" method="post">
        <textarea class="form-control margin-top" name="iframe" rows="8" width=100%></textarea>
        <input class="btn btn-lg btn-primary margin-top" name="saveMap" type="submit" value="Save">
      </form>
  </div>
</div>
