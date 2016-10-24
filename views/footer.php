<div class="panel panel-default">
  <div class="row">
    <div class="panel-body">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <ul class="list-group">
          <h3 class="text-justify">Find Us:</h3>
          <li class="list-group-item"><h5><?php retrieve_data('footer_content', '1-ul-li-street', 'body_content');?></h5></li>
          <li class="list-group-item"><h5><?php retrieve_data('footer_content', '1-ul-li-building', 'body_content');?></h5></li>
          <li class="list-group-item"><h5><?php retrieve_data('footer_content', '1-ul-li-floor', 'body_content');?></h5></li>
        </ul>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center">
        <h3 class="text-center">Map: </h3>
        <?php retrieve_data('footer_content', '2-iframe-map', 'body_content');?>
      </div>
    </div>
    <hr>
    <div class="panel panel-heading">
      <div class="float-left">
        <h5>Copyright &copy SSS 2016</h5>
      </div>
    </div>
  </div>
</div>
