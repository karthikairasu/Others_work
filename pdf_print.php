  <style type="text/css">
    body {
        font-family: 'Roboto Condensed', sans-serif;
    }
    .table_fixed_height thead tr th {
        background-color: #ffffff;
        color: #000000;
        position: sticky;
        top: 0px;
        z-index: 10;
        padding: 10px 5px;
        white-space: nowrap;
        border: 1px solid #000000;
        /*outline: 2px solid #565656;
        outline-style: auto;*/
    }
    .table_fixed_height tbody td {
        padding: 5px 5px!important;
    }
    .table-bordered td, .table-bordered th {
        border: 1px solid #969696;
    }
    .fixed_btn{
        position: fixed;
        bottom: 25px;
        right: calc( 48% - 0px );
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        z-index: 100;
    }
    .fixed_btn2{
        position: fixed;
        bottom: 25px;
        right: calc( 48% - 70px );
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        z-index: 100;
    }
  </style>
<div id="tblCustomers" class="border border-secondary p-1" style="margin-top:70px">  
<div class="container-fluid" >
    <div class="row mb-3 p-1">
      <div class="col-md-2 col-sm-2 col-12 text-center">
      
      </div>
      <div class="col-md-8 col-sm-8 col-12 text-center">         
        <h5 class="text-center"><b>Advanced Shipping Notification</b></h5>
        <h3 class="text-center"><?php if($current_page !== "index"){ ?><h3 class="mb-0"><?= strtoupper(str_replace('v', '',$this->session->userdata('vendor_no')));?> - <?= strtoupper($this->session->userdata('name'))?><?php } ?></h3>
      </div>
      <div class="col-md-2 col-sm-2 col-12 pb-2 text-center">
        <a href="">
          <img src="<?=base_url()?>assets/images/logo.png" height="60px">
        </a>
      </div>
    </div>
    <div class="border border-secondary mb-4">
    <form class="" action="">
        <div class="row mb-3 p-1">
          <div class="col-md-4 col-sm-6 col-12">
            <div class="form-row">
              <label class="col-md-4 col-sm-4 col-4"><b>ASN ID</b></label>
              <label class="col-md-1 col-sm-1 col-1 px-0">:</label>
              <label class="col-md-7 col-sm-7 col-7" id="RGR_ID"
                ><?=$po_list[0]->rgr_id?>
              </label>
            </div>
           <!--  <div class="form-row py-1">
              <label class="col-md-4 col-sm-4 col-4"><b>Po No</b></label>
              <label class="col-md-1 col-sm-1 col-1 px-0">:</label>
              <label class="col-md-7 col-sm-7 col-7" id="Po_No"
                ><?=$po_list[0]->po_no?>
              </label>
            </div> -->
            <div class="form-row">
              <label class="col-md-4 col-sm-4 col-4"><b>Ship To</b></label>
              <label class="col-md-1 col-sm-1 col-1 px-0">:</label>
              <label class="col-md-7 col-sm-7 col-7" id="Ship_To">
                 <?php $ship_to = $this->Common_model->select_column('plants','name',array('id'=>$po_list[0]->ship_to)); ?>
                <?=$ship_to[0]->name ?>
              </label>
            </div>
             <div class="form-row py-1">
              <label class="col-md-4 col-sm-4 col-4"><b>Invoice No</b></label>
              <label class="col-md-1 col-sm-1 col-1 px-0">:</label>
              <label class="col-md-7 col-sm-7 col-7" id="Invoice_No"
                >1233567
              </label>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-12 text-center">
            <!-- <a href="">
              <img src="assets/images/logo2.png" height="70px">
            </a> -->
          </div>
          <div class="col-md-4 col-sm-6 col-12 order-3 order-sm-3">
            <div class="form-row">
              <label class="col-md-4 col-sm-4 col-4"
                ><b>Delivery Date</b></label
              >
              <label class="col-md-1 col-sm-1 col-1 px-0">:</label>
              <label class="col-md-7 col-sm-7 col-7" id="Delivery Date"
                ><?php echo date('Y-m-d',strtotime($po_list[0]->delivery_date)) ?>
              </label>
            </div>
            <div class="form-row">
              <label class="col-md-4 col-sm-4 col-4"
                ><b>Pallet Count</b></label
              >
              <label class="col-md-1 col-sm-1 col-1 px-0">:</label>
              <label class="col-md-7 col-sm-7 col-7" id="Pallet Count">
                <?=$po_list[0]->total_pallet_count?>
              </label>
            </div>
            <div class="form-row">
              <label class="col-md-4 col-sm-4 col-4"><b>Status</b></label>
              <label class="col-md-1 col-sm-1 col-1 px-0">:</label>
              <label class="col-md-7 col-sm-7 col-7" id="Status">
                <?php
                  $status = "New";
                  $class="text-warning";
                  if($po_list[0]->status==1){
                    $status = "NEW";
                    $class="text-warning";
                  }
                  elseif($po_list[0]->status == 2){
                    $status = "ACCEPTED";
                    $class="text-success";
                  }
                   if($po_list[0]->status == 3){
                    $status = "REJECTED";
                    $class="text-danger";
                  }
              ?>
                <span class="<?= $class?> px-1"><b><?=$status ?></b></span>
              </label>
            </div>
          </div>
        </div>
    </form>
    </div>   
  </div>
    <div class="row justify-content-center border border-secondary mx-0 p-1">
     
        <div class="col-12 text-center px-0 table_fixed_height p-1">
          <table id="tableID" class="table table-bordered mx-auto">
            <thead class="">
              <tr>
                <th class="px-1" width="6%">PO No</th>
                <th class="px-1" width="6%">PO Item No</th>
                <th class="px-1" width="12%">Nupco Code</th>
                <th class="px-1">Nupco Material Description</th><!-- 
                <th class="px-1" width="12%">Moda Code</th> -->
                <th class="px-1" width="8%">Delivery qty </th><!-- 
                <th class="px-1" width="8%">Batch No</th> -->
                <th class="px-1" width="7%">Pallet Count</th>
                <th class="px-1" width="8%">Batch Qty</th>
                <th class="px-1" width="8%">Batch Number</th>
                <th class="px-1" width="8%">Manufacture Date</th>
                <th class="px-1" width="8%">Expiry Date</th>

              </tr>
            </thead>

            <tbody>
              <?php  if(!empty($po_list)){ 
                foreach ($po_list as $key => $value) { 
                  $batch_list = $this->Common_model->get_all_records("batch_list",array('rgr_id'=>$value->rgr_id,'po_item'=>$value->po_item));
              ?>
               <tr>
                   <td><?=$value->po_no?></td>
                   <td><?=$value->po_item?></td>
                   <td><?=$value->nupco_material?></td>
                   <td><?=$value->nupco_material_description?></td>
                   <td><?=$value->delivery_qty?></td>
                   <td><?=$value->pallet_count?></td>
                   <td><?php if(!empty($batch_list)){echo $batch_list[0]->batch_qty ;}?></td>
                   <td><?php if(!empty($batch_list)){ echo $batch_list[0]->batch_no ;}?></td>
                   <td><?php if(!empty($batch_list)){ echo $batch_list[0]->manufacturing_date ;}?></td>
                   <td><?php if(!empty($batch_list)){ echo $batch_list[0]->expiry_date ;}?></td>
               </tr>
              <?php } }else{  ?>
              <tr>
                <td colspan="8">No Requests Found</td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>

        <input type="hidden" name="rgr_id" value="000-000-003">
              
       <!--  -->  
  </div>
</div>
  <div class="fixed_btn"><button class="btn btn-info" id="btnExport" type="button">Export Pdf</button></div>
  <div class="fixed_btn2">
    <button class="btn btn-info"onclick="window.print()" type="button">Print</button>
  </div>
</div>
<script type="text/javascript">
  $("body").on("click", "#btnExport", function () {
    $(".hide").css('display','none');
      html2canvas($('#tblCustomers')[0], {
        onrendered: function (canvas) {
            var data = canvas.toDataURL();
            var docDefinition = {
                content: [{
                    image: data,
                    width: 500
                }]
            };
            pdfMake.createPdf(docDefinition).download("Table.pdf");
             $(".hide").css('display','');
        }
      });
  });
</script>