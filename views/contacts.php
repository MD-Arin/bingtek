<div class="container-fluid">
  <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 vertical-line-right">
    <form action="mail.php" method="post">
      <div class="row margin-tb">
        <div class="input-group form-inline">
          <span class="input-group-addon" id="sizing-addon3">*</span>
          <input class="form-control" type="text" name="first-name" placeholder="First Name">
          <span class="input-group-addon" id="sizing-addon3">*</span>
          <input class="form-control" type="text" name="last-name" placeholder="Last-Name">
        </div>
      </div>
      <div class="row margin-tb">
        <div class="input-group">
          <span class="input-group-addon" id="sizing-addon3">*</span>
          <input class="form-control" type="email" name="email-address" placeholder="your-address@email.com">
        </div>
      </div>
      <div class="row">
        <div class="input-group">
          <span class="input-group-addon" id="sizing-addon3">*</span>
          <input class="form-control" type="text" name="subject" placeholder="subject">
        </div>
      </div>
      <div class="row margin-tb">
        <textarea class="form-control" name="message" rows="12" style="width:100%;"></textarea>
      </div>
      <div class="row text-center" style="margin-bottom: 30px;">
        <input class="btn btn-primary btn-lg" type="submit" name="send_mail" value="Send Mail">
      </div>
    </form>
  </div>
  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 margin-tb">
    <?php retrieve_data('contacts_content', '1-iframe', 'body_content');?>
  </div>
</div>
