<div class="container table-responsive m-t-20">
    <h2 class="py-3 text-center">Visualizar pedido do usuário</h2>
    <table id="myTable" class="table table-bordered table-hover table-striped dataTable">
        <tbody>
            <tr>
                <td><strong>Ordenado por:</strong></td>
                <td><?php echo $order['username'] ?></td>
            </tr>
            <tr>
                <td><strong>Item:</strong></td>
                <td><?php echo $order['d_name'] ?></td>
            </tr>
            <tr>
                <td><strong>Quantidade:</strong></td>
                <td><?php echo $order['quantity'] ?></td>
            </tr>
            <tr>
                <td><strong>Preço:</strong></td>
                <td><?php echo "R$".$order['price'] ?></td>
            </tr>
            <tr>
                <td><strong>Endereço:</strong></td>
                <td><?php echo $order['address'] ?></td>
            </tr>
            <tr>
                <td><strong>Data do Pedido:</strong></td>
                <td><?php echo $order['date'] ?></td>
            </tr>
            <form method="post" action="<?php echo base_url().'admin/orders/updateOrder/'.$order['o_id']; ?>">
                <tr>
                    <td><strong>Select Order Status:</strong></td>
                    <td>
                        <select class="form-control" name="status"
                            class="<?php echo (form_error('status') != "") ? 'is-invalid' : '';?>">
                            <option>Selecione o Status</option>
                            <option value="in process">Em Processo</option>
                            <option value="closed">Fechado/Entregue</option>
                            <option value="rejected">Rejeitado</option>
                        </select>
                        <?php echo form_error('status');?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="btn btn-primary btn-block" type="submit">Salvar</button></td>
                </tr>
            </form>
        </tbody>
    </table>
</div>