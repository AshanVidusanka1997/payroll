<?php
//session_start();
?>
<script src="https://unpkg.com/vue"></script>
<section class="content">

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><b>Comman</b></h3>
        </div>
        <form name= "form1" role="form" class="form-horizontal">

            <div class="box-body">


                <div class="form-group-sm">

                  
                    <a  onclick="save_inv();" class="btn btn-success btn-sm">
                        <span class="fa fa-save"></span> &nbsp; SAVE
                    </a>
    
                 

                    <a onclick="//delete1();" class="btn btn-danger btn-sm" disabled="disabled">
                        <span class="glyphicon glyphicon-trash"></span> &nbsp; DELETE
                    </a>

                    <a onclick="NewWindow('search_deliverynote.php?stname=code', 'mywin', '800', '700', 'yes', 'center');" class="btn btn-info btn-sm">
                        <span class="glyphicon glyphicon-search"></span> &nbsp; FIND
                    </a>

                    <a onclick="print();" class="btn btn-primary btn-sm">
                        <span class="glyphicon glyphicon-print"></span> &nbsp; PRINT
                    </a>

            
                </div>
                <hr>
                <div id="msg_box" class="span12 text-center"></div>




 <div class='form-group'></div>
 <div class='form-group-sm'>
 <label class='col-sm-2' for='c_code'>reference_no</label>
 <div class='col-sm-2'>
 <input type='text' placeholder='reference_no'  id='reference_no' class='form-control Name  input-sm'>
 </div>
 </div>
 
 <div class='form-group'></div>
 <div class='form-group-sm'>
 <label class='col-sm-2' for='c_code'>passport_no</label>
 <div class='col-sm-2'>
 <input type='text' placeholder='passport_no'  id='passport_no' class='form-control Name  input-sm'>
 </div>
 </div>
 
 <div class='form-group'></div>
 <div class='form-group-sm'>
 <label class='col-sm-2' for='c_code'>date</label>
 <div class='col-sm-2'>
 <input type='text' placeholder='date'  id='date' class='form-control Name  input-sm'>
 </div>
 </div>
 
 <div class='form-group'></div>
 <div class='form-group-sm'>
 <label class='col-sm-2' for='c_code'>name</label>
 <div class='col-sm-2'>
 <input type='text' placeholder='name'  id='name' class='form-control Name  input-sm'>
 </div>
 </div>
 
 <div class='form-group'></div>
 <div class='form-group-sm'>
 <label class='col-sm-2' for='c_code'>nationality</label>
 <div class='col-sm-2'>
 <input type='text' placeholder='nationality'  id='nationality' class='form-control Name  input-sm'>
 </div>
 </div>
 
 <div class='form-group'></div>
 <div class='form-group-sm'>
 <label class='col-sm-2' for='c_code'>last_name</label>
 <div class='col-sm-2'>
 <input type='text' placeholder='last_name'  id='last_name' class='form-control Name  input-sm'>
 </div>
 </div>
 
 <div class='form-group'></div>
 <div class='form-group-sm'>
 <label class='col-sm-2' for='c_code'>sex</label>
 <div class='col-sm-2'>
 <input type='text' placeholder='sex'  id='sex' class='form-control Name  input-sm'>
 </div>
 </div>
 
 <div class='form-group'></div>
 <div class='form-group-sm'>
 <label class='col-sm-2' for='c_code'>address</label>
 <div class='col-sm-2'>
 <input type='text' placeholder='address'  id='address' class='form-control Name  input-sm'>
 </div>
 </div>
 
 <div class='form-group'></div>
 <div class='form-group-sm'>
 <label class='col-sm-2' for='c_code'>age</label>
 <div class='col-sm-2'>
 <input type='text' placeholder='age'  id='age' class='form-control Name  input-sm'>
 </div>
 </div>
 
 <div class='form-group'></div>
 <div class='form-group-sm'>
 <label class='col-sm-2' for='c_code'>applied_position</label>
 <div class='col-sm-2'>
 <input type='text' placeholder='applied_position'  id='applied_position' class='form-control Name  input-sm'>
 </div>
 </div>
 
 <div class='form-group'></div>
 <div class='form-group-sm'>
 <label class='col-sm-2' for='c_code'>medical</label>
 <div class='col-sm-2'>
 <input type='text' placeholder='medical'  id='medical' class='form-control Name  input-sm'>
 </div>
 </div>
 
 <div class='form-group'></div>
 <div class='form-group-sm'>
 <label class='col-sm-2' for='c_code'>agency</label>
 <div class='col-sm-2'>
 <input type='text' placeholder='agency'  id='agency' class='form-control Name  input-sm'>
 </div>
 </div>




          
        </form>


<br><br><br>
<div class="Container" id="app">

        
            
                <table id="inputheader" class="table table-bordered" hidden="">
                    <thead>
                        <tr>
                            <th style="width: 20%;"><input v-model="H1" id="H1"></th>
                            <th style="width: 20%;"><input v-model="H2" id="H2"></th>
                            <th style="width: 10%;"><input v-model="H3" id="H3"></th>
                            <th style="width: 50%;"><input v-model="H4" id="H4"></th>
                            <th style="width: 20%;"><input v-model="H5" id="H5"></th>
                        </tr>
                    </thead>
                   

                </table>

             
          


        <div id="beTable">
            <div id="getTable">
                <table id="myTable" class="table table-bordered" hidden="">
                    <thead>
                        <tr>
                            <th style="width: 20%;" contenteditable="false">{{H1}}</th>
                            <th style="width: 20%;" contenteditable="false">{{H2}}</th>
                            <th style="width: 10%;" contenteditable="false">{{H3}}</th>
                            <th style="width: 30%;" contenteditable="false">{{H4}}</th>
                            <th style="width: 20%;" contenteditable="false">{{H5}}</th>
                            <th style="width: 50%;" onclick="addRow();" >+</th>
                        </tr>
                    </thead>
                   

                </table>

              </div>
          </div>

                    <div class="form-group"></div>
                    <div class="form-grou-sm">
                      <label class="col-sm-2" for="c_code"></label>
                        <div class="col-sm-2 form-group-sm">
                          
                        </div>
                    <div class="col-sm-1">
                       
                    </div>
                     <div class="col-sm-3"></div>
                     <label class="col-sm-2" for="c_code">Total Qty</label>
                        <div class="col-sm-2 form-group-sm">
                            <input type="text" id="totQty" class="form-control  input-sm">
                        </div>
                    </div>




</div>



        <div class="row">
            <div class="col-md-8" id="mattable">

            </div>


        </div>
    </div>

</section>
<script src="js/com.js"></script>


<?php
// include 'autocompleJUI/disp_packlist_PATH.php';
?>

<script type="text/javascript">

</script>
<script src="js/tableToJsonMini.js"></script>
<script src="js/tableToJson.js"></script>


<script>getdt();</script>
