    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2><?= $branchName ?></h2>
           <ol class="breadcrumb">
                <li>
                    <a href="<?php  base_url(); ?>home">Home</a>
                </li>
    
                <li class="active">
                    <strong>Kasir</strong>
                </li>
            </ol> 
        </div>
        <div class="col-lg-2">

        </div>
    </div>
        <div class="wrapper wrapper-content animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <?= $this->session->flashdata('msg') ?>
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Kasir</h5>
                        </div>
                        <div class="ibox-content">
                            <?= form_open_multipart('Employee', ['class' => 'form-horizontal']) ?>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Nama</label>
                                    <div class="col-lg-10">
                                        <input type="text" placeholder="Nama Pembeli" name="buyer_name" id="buyer_name" class="form-control"> 
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                 <div class="form-group">
                                    <label class="col-lg-2 control-label">No handphone</label>
                                    <div class="col-lg-10">
                                        <input type="text" placeholder="No Hp Pembeli" name="no_hp" id="no_hp" class="form-control"> 
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Barang</label>
                                    <div class="col-lg-10">
                                        <table class="table table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Kode Barang</th>
                                                    <th>Nama Barang</th>
                                                    <th>Qty </th>
                                                    <th>No Batch</th>
                                                    <th>Expired</th>
                                                    <th>Harga Satuan</th>
                                                    <th>Harga</th>
                                                    <th>-</th>
                                                </tr>
                                            </thead>
                                            <tbody id="item-container">
                                                <tr>
                                                    <td class="item-number">1</td>
                                                    <td>
                                                        <input type="text" name="itemCode[]" id="item_name_1" placeholder="Kode Barang" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="itemName[]" id="item_code_1" placeholder="Nama Barang" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="qty[]" id="item_code_1" placeholder="Qty" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="batch[]" id="item_code_1" placeholder="No Batch" class="form-control" disabled>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="expired[]" id="item_code_1" placeholder="Expired" class="form-control" disabled>
                                                    </td>
                                                    <td>
                                                        <div class="input-group m-b">
                                                            <span class="input-group-addon">Rp.</span>
                                                            <input type="text" placeholder="Harga Satuan" name="pricePerPiece[]" id="item_budget_ceiling_1" class="form-control" disabled> 
                                                        </div>
                                                    </td>
                                                    
                                                    <td>
                                                    <div class="input-group m-b">
                                                            <span class="input-group-addon">Rp.</span>
                                                            <input type="text" placeholder="Harga" name="item_budget_ceiling[]" id="item_budget_ceiling_1" class="form-control" disabled> 
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button type="button" onclick="remove_item(this);" class="btn btn-danger btn-sm">
                                                            <i class="fa fa-close"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <button type="button" class="btn btn-warning btn-sm" id="add-item-button" onclick="add_item();">
                                            <i class="fa fa-plus"></i> Tambah Item
                                        </button>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Total Sementara</label>
                                    <div class="col-lg-10">
                                        <div class="input-group m-b">
                                            <span class="input-group-addon">Rp.</span>
                                            <input type="text" placeholder="Total" name="contract_value" id="contract_value" class="form-control" disabled> 
                                        </div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                               
                                <hr>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <input type="submit" name="submit" value="Check Out" class="btn btn-success">
                                    </div>
                                </div>
                            <?= form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div id="modal-form" class="modal fade" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <?= form_open_multipart('home/add-project', ['class' => 'form-horizontal']) ?>
                            <h3 class="m-t-none m-b">Tambah Tipe Proyek</h3>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Nama Tipe Proyek</label>
                                <div class="col-lg-9">
                                    <input type="text" placeholder="Nama Tipe Proyek" id="type" name="type" class="form-control"> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Keterangan</label>
                                <div class="col-lg-9">
                                    <textarea class="form-control" name="description" id="description" placeholder="Keterangan"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10 pull-right">
                                    <button type="button" onclick="add_project_type();" class="btn btn-sm btn-success" data-dismiss="modal">Tambah</button>
                                </div>
                            </div>
                        <?= form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-form2" class="modal fade" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <?= form_open_multipart('home/add-project', ['class' => 'form-horizontal']) ?>
                            <h3 class="m-t-none m-b">Tambah Penyedia Jasa</h3>
                           
                        <?= form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        let numItems = 1;

        function add_item() {
            numItems++;
            $('#item-container').append(`
                <tr>
                <td class="item-number">`+numItems+`</td>
                <td>
                    <input type="text" name="itemCode[]" id="item_name_1" placeholder="Kode Barang" class="form-control">
                </td>
                <td>
                    <input type="text" name="itemName[]" id="item_code_1" placeholder="Nama Barang" class="form-control">
                </td>
                <td>
                    <input type="text" name="qty[]" id="item_code_1" placeholder="Qty" class="form-control">
                </td>
                <td>
                    <input type="text" name="batch[]" id="item_code_1" placeholder="No Batch" class="form-control" disabled>
                </td>
                <td>
                    <input type="text" name="expired[]" id="item_code_1" placeholder="Expired" class="form-control" disabled>
                </td>
                <td>
                    <div class="input-group m-b">
                        <span class="input-group-addon">Rp.</span>
                        <input type="text" placeholder="Harga Satuan" name="pricePerPiece[]" id="item_budget_ceiling_1" class="form-control" disabled> 
                    </div>
                </td>
                
                <td>
                <div class="input-group m-b">
                        <span class="input-group-addon">Rp.</span>
                        <input type="text" placeholder="Harga" name="item_budget_ceiling[]" id="item_budget_ceiling_1" class="form-control" disabled> 
                    </div>
                </td>
                <td>
                    <button type="button" onclick="remove_item(this);" class="btn btn-danger btn-sm">
                        <i class="fa fa-close"></i>
                    </button>
                </td>
            </tr>
            `);
        }

        function remove_item(obj) {
            numItems--;
            $(obj).parent().parent().remove();
            re_numbering();
        }

        function re_numbering() {
            $('.item-number').each(function(index, itemNumber) {
                $(itemNumber).text(index + 1);
            });
        }

        function add_project_type() {
            $.ajax({
                url: '<?= base_url('home/add-project') ?>',
                type: 'POST',
                data: {
                    add_project_type: true,
                    type: $('#type').val(),
                    description: $('#description').val()
                },
                success: function(response) {
                    const json = $.parseJSON(response);
                    if (json.status === 'success') {
                        $('#type_id').html('');
                        let html = '';
                        for (let i = 0; i < json.data.length; i++) {
                            html += '<option value="' + json.data[i].id + '">' + json.data[i].type + '</option>';
                        }

                        $('#type_id').html(html);
                    }
                    else {
                        alert(json.message);
                    }

                    
                },
                error: function(err) {
                    alert(JSON.stringify(err));
                }
            });
        }

        function add_service_provider() {
            $.ajax({
                url: '<?= base_url('home/add-project') ?>',
                type: 'POST',
                data: {
                    add_service_provider: true,
                    username: $('#sp_username').val(),
                    password: $('#sp_password').val(),
                    rpassword: $('#sp_rpassword').val(),
                    email: $('#sp_email').val(),
                    contact: $('#sp_contact').val(),
                    name: $('#sp_name').val()
                },
                success: function(response) {
                    const json = $.parseJSON(response);
                    if (json.status === 'success') {
                        $('#provider_id').html('');
                        let html = '';
                        for (let i = 0; i < json.data.length; i++) {
                            html += '<option value="' + json.data[i].id + '">' + json.data[i].name + '</option>';
                        }

                        $('#provider_id').html(html);
                    }
                    else {
                        alert(json.message);
                    }

                    
                },
                error: function(err) {
                    alert(JSON.stringify(err));
                }
            });
        }
    </script>