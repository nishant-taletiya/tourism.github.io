<link href="<?php echo base_url()?>plugins/jquery.filer/css/jquery.filer.css" rel="stylesheet" />
<link href="<?php echo base_url()?>plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" rel="stylesheet" />

<!-- Bootstrap fileupload css -->
<link href="<?php echo base_url()?>plugins/bootstrap-fileupload/bootstrap-fileupload.css" rel="stylesheet" />



<div class="col-lg-6"  style="margin-left:450px; margin-top:90px;">
            <div class="card-box">
              <h4 class="header-title m-t-0" align="center">||---Add Attraction---||</h4>
              <br />
              <form enctype="multipart/form-data" action="<?php echo site_url() ?>/attractioncontroller/insert" method="post">
              <div class="form-group">
                  <label for="userName">Place id<span class="text-danger"></span></label>
                  <select class="form-control" id="userName" name="pid" onchange="splace(this.value)"  >
                  <option>Select place</option>
                  <?php
				  	foreach ($spid as $row)
					{
				  ?>
                  <option value="<?php echo $row->PID ?>"><?php echo $row->Pname ?></option>
                  <?php
					}
					?>
                  </select>
                  <br />
                  <label for="userName">Sub place id<span class="text-danger"></span></label>
                  <select class="form-control" id="subplace" name="sid"  >
                  <option>Select sub place</option>
                  <?php
				  	foreach ($sspid as $row)
					{
				  ?>
                  <option value="<?php echo $row->SID ?>"><?php echo $row->SPtitle ?></option>
                  <?php
					}
					?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="userName">Attraction title<span class="text-danger"></span></label>
                  <input type="text" name="nick" required="" placeholder="Attraction title" class="form-control" id="userName">
                </div>
                <h5>Description</h5>
                <div>
                	<textarea name="email" class="form-control"></textarea>
                </div>
                
                <div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="fileupload-new thumbnail"> <img src="<?php echo base_url()?>/attractionimage/c5d327cbe167851ac17ecccb05e7c998.jpg" alt="image" /> </div>
                      <div class="fileupload-preview fileupload-exists thumbnail"></div>
                      <div>
                        <button type="button" class="btn btn-default btn-file">
                        <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span> <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                        <input name="image"  type="file" class="btn-default" />
                        </button>
                         </div>
                    </div>
                
                
                
                
                <div class="form-group text-right m-b-0">
                  <button class="btn btn-primary waves-effect waves-light" type="submit"> Insert </button>
                  <button type="reset" class="btn btn-default waves-effect m-l-5"> Cancel </button>
                </div>
              </form>
            </div>
            <!-- end card-box --> 
          </div>



<script src="<?php echo base_url()?>plugins/jquery.filer/js/jquery.filer.min.js"></script> 
<script src="<?php echo base_url()?>/assets/js/jquery-3.4.1.min.js"></script> 

<script>
function splace(id)
{

	$.ajax({
				url:"<?php echo site_url() ?>/attractioncontroller/getsubplace2/"+id,
				method:"post",
				success: function(res)
				{
	
					$("#subplace").empty();
					$("#subplace").html("<option>select subplace</option>");
					$("#subplace").append(res);
				}
			
		});

}

</script>

<!-- Bootstrap fileupload js --> 
<script src="<?php echo base_url()?>plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script> 
<!-- page specific js --> 
<script src="<?php echo base_url()?>assets/pages/jquery.fileuploads.init.js"></script> 

<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url()?>assets/js/metisMenu.min.js"></script> 
<script src="<?php echo base_url()?>assets/js/waves.js"></script> 
<script src="<?php echo base_url()?>assets/js/jquery.slimscroll.js"></script> 

<!-- Parsley js --> 
<script  src="<?php echo base_url()?>plugins/parsleyjs/parsley.min.js"></script> 
<script  src="<?php echo base_url()?>plugins/parsleyjs/parsley.custom.js"></script> 

<script src="<?php echo base_url()?>assets/js/jquery.core.js"></script> 
<script src="<?php echo base_url()?>assets/js/jquery.app.js"></script> 