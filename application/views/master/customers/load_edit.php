 

<div class="panel-form">
<div class="box">
   <div class="box-header">
      
      <div class="pull-left">
        <h2 class="u-top-0">Actualizar Cliente</h2>
      </div>
      <div class="pull-right">
          <a href="<?php echo base_url($controller.'/show') ?>" class="btn btn-info">
            <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
          </a>
      </div>
   </div>

 </div>
<div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Datos del Cliente</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal" action="<?php echo base_url($controller.'/update') ?>" method="POST">
      <div class="box-body">
        <div class="form-group">
          <label for="name" class="col-sm-2 control-label">NOmbre</label>
          <div class="col-sm-4">
          
            <input  type="text" class="form-control" id="name" name="name" placeholder="Nombre">
             
          </div>
        </div>

        <div class="form-group">
          <label for="last_name" class="col-sm-2 control-label">Apellidos</label>
          <div class="col-sm-4">
          
            <input  type="text" class="form-control" id="last_name" name="last_name" placeholder="Apellidos">
            
          </div>
        </div>

        <div class="form-group">
          <label for="dni" class="col-sm-2 control-label">DNI</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="dni" name="dni" placeholder="DNI">
            
          </div>
        </div>
        
     
       
      </div><!-- /.box-body -->
      <div class="box-footer">
        <a href="<?php echo base_url($controller.'/show') ?>" class="btn btn-danger"><span class="glyphicon glyphicon-left" aria-hidden="true"></span> Cancelar</a>
        <button type="submit" class="btn btn-info pull-right btnUpdate"> <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Registrar</button>
      </div><!-- /.box-footer -->
    </form>
  </div>


</div>

<script src="<?php echo base_url('public/master/'.$controller.'.js') ?>"></script>