<div class="container mt-3">
    <?php if($this->session->flashdata('success_msg') != ""):?>
    <div class="alert alert-success">
        <?php echo $this->session->flashdata('success_msg');?>
    </div>
    <?php endif ?>
    <?php if($this->session->flashdata('error_msg') != ""):?>
    <div class="alert alert-danger">
        <?php echo $this->session->flashdata('error_msg');?>
    </div>
    <?php endif ?>
    <div class="container shadow-container">
        <h2 class="text-center">Pedidos Recentes</h2>
        <div class="table-responsive-sm">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Quantidade</th>
                        <th>Preço</th>
                        <th>Status</th>
                        <th>Data do Pedido</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <?php if(!empty($orders)) {?>
                    <?php foreach($orders as $order) { ?>
                    <?php $status=$order['status']; 
                            if($status=="" or $status=="NULL" or $status=="in process" or $status=="rejected") { ?>
                    <tr>
                        <td><?php echo $order['d_name']; ?></td>
                        <td><?php echo $order['quantity']; ?></td>
                        <td><?php echo 'R$'.$order['price']; ?></td>
                        <?php if($status=="" or $status=="NULL") { ?>
                        <td> <button type="button" class="btn btn-secondary" style="font-weight:bold;"><i class="fas fa-bars"></i> Entregue</button></td>
                        <?php } if($status=="in process") { ?>
                        <td> <button type="button" class="btn btn-warning"><span class="fa fa-cog fa-spin" aria-hidden="true"></span> On Your Way!</button></td>
                        <?php }?>
                        <?php if($status=="rejected") { ?>
                        <td> <button type="button" class="btn btn-danger"> <i class="far fa-times-circle"></i> Cancelado</button>
                        </td>
                        <?php } ?>
                        <td><?php echo $order['date']; ?></td>
                        <td>
                            <a href="javascript:void(0);" onclick="deleteOrder(<?php echo $order['o_id']; ?>)" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Cancelar</a>
                        </td>
                    </tr>
                    <?php } ?>
                    <?php } ?>
                    <?php } else { ?>
                    <tr>
                        <td colspan="6">Records not found</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <h2 class="text-center">Todos os Pedidos</h2>
        <div class="table-responsive-sm">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Data</th>
                        <th>Item</th>
                        <th>Quantidade</th>
                        <th>Preço</th>
                        <th>Status</th>
                        <th>Fatura</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <?php if(!empty($orders)) {?>
                    <?php foreach($orders as $order) { ?>
                    <?php $status=$order['status']; 
                            if($status=="closed") { ?>
                    <tr>
                        <?php $cDate = strtotime($order['date']); ?>
                        <td><?php echo date('d-M-Y',$cDate); ?></td>
                        <td><?php echo $order['d_name']; ?></td>
                        <td><?php echo $order['quantity']; ?></td>
                        <td><?php echo 'R$'.$order['price']; ?></td>
                        <td> <button type="button" class="btn btn-success"><i class="fas fa-check"></i> Entregue</button>
                        <td><a href="<?php echo base_url().'orders/invoice/'.$order['o_id']; ?>" class="btn btn-info"><i class="fas fa-file-alt"></i> Fatura</a></td>
                    </tr>
                    <?php } ?>
                    <?php } ?>
                    <?php } else { ?>
                    <tr>
                        <td colspan="5">Records not found</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    function deleteOrder(id) {
        if (confirm("Are you sure you want to cancel this order?")) {
        window.location.href = '<?php echo base_url().'orders/deleteOrder/';?>' + id;
        }
    }
</script>