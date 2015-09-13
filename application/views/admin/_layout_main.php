<?php $this->load->view('admin/components/page_head'); ?>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo site_url('admin/dashboard'); ?>"><?php echo $meta_title; ?></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo site_url('admin/dashboard'); ?>">Dashboard</a></li>
            <li><?php echo anchor('admin/pages', 'Pages'); ?></li>
            <li><?php echo anchor('admin/user', 'Users'); ?></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <!-- Main column -->
        <div class="col-md-9">
          <section>
            <h2>Page name</h2>
          </section>
        </div>
        <!-- Sidebar -->
        <div class="col-md-3">
          <section>
            <?php echo mailto('nguyenpeter.edu@gmail.com', '<span class="glyphicon glyphicon-user" aria-hidden="true"></span> nguyenpeter.edu@gmail.com'); ?><br>
            <?php echo anchor('admin/user/logout', '<span class="glyphicon glyphicon-off" aria-hidden="true"></span> Logout'); ?>
          </section>
        </div>
      </div>
    </div>

<?php $this->load->view('admin/components/page_tail'); ?>